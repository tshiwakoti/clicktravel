<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
	public function register($post){
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|md5');
		$this->form_validation->set_rules('passwordconf', 'Confirm Password', 'trim|required|md5|matches[password]');
		if ($this->form_validation->run()){
			$query = "INSERT INTO users (name, email, password, created_at, updated_at) 
					  			 VALUES (?, ?, ?, NOW(), NOW());";
			$values = array($post['name'], $post['email'], $this->input->post('password'));
			return $this->db->query($query, $values);
		} else {
			$this->session->set_flashdata('errors', validation_errors());
			return false;
		}
	}

	public function getCities($latitude, $longitude)
	{
		$query = "SELECT name, descr FROM cities
					WHERE ({$latitude} > lat-10 AND {$latitude} < lat+10) AND ({$longitude} > lng-10 AND {$longitude} < lng+10);";
		return $this->db->query($query)->result_array();
	}

	public function login($post){
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required|md5");
		if ($this->form_validation->run()){
			$query = "SELECT * FROM users WHERE email = ?;";
			$values = array($post['email']);
			$user = $this->db->query($query, $values)->row_array();
			if ($user && $user['password'] == $this->input->post('password')){
				return $user;
			} else {
				$this->session->set_flashdata('errors', '<p>Invalid email/password combination.</p>');
			}
		} else {
			$this->session->set_flashdata('errors', validation_errors());
			return false;
		}

	}

 }
 ?>
