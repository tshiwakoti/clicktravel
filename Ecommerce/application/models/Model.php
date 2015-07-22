<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	public function register($post){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha|ssx_clean");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha|ssx_clean");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|md5");
		$this->form_validation->set_rules("passwordconf", "Confirm Password", "trim|required|matches[password]");
		if ($this->form_validation->run()){
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) 
					  			 VALUES (?, ?, ?, ?, NOW(), NOW());";
			$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
			return $this->db->query($query);
		} else {
			return false;
		}
	}

	public function getCities($latitude, $longitude)
	{
		$query = "SELECT name, description FROM cities
					WHERE ({$latitude} > lat-10 AND {$latitude} < lat+10) AND ({$longitude} > lng-10 AND {$longitude} < lng+10);";
		return $this->db->query($query)->result_array();
	}

	public function login($post){
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required|md5");
		if ($this->form_validation->run()){
			$query = "SELECT FROM users WHERE email = ?;";
			$values = array($post['email']);
			$user = $this->db->query($query);
			if ($user && $user['password'] == $post['password']){
				return $user;
			}
		} else {
			return false;
		}

	}

 }
 ?>
