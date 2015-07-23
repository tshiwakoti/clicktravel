<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->library('session');
		$this->load->library('googlemaps');
		$this->load->library('form_validation');
		$this->load->model('Model');

		$this->load->helper('url');

		$this->session->set_userdata('logged_in', false);


	}

	 public function index()
	{
		$this->load->view('users/index', array('errors' => $this->session->flashdata('errors')));

  }

	public function processCoords(){
		$post = $this->input->post();
		$cities = $this->Model->getCities($post['lat'], $post['lng']);
		$results = array('results' => $post, 'cities' => $cities);
		$this->load->view('users/trips', $results);

	}
	public function checkout(){
		$this->load->view('users/checkout');

	}

	public function register(){
		$this->Model->register($this->input->post());
		redirect('/');
	}

	public function login(){
		$user = $this->Model->login($this->input->post());
		if ($user) {
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('user_id', $user['id']);
			if ($user['admin_level'] == 9) {
				redirect('/orders/');
			} else {
				$this->index();
			}
		} else {
			redirect('/');
		}
	}

	public function logoff(){
		$this->session->set_userdata('logged_in', false);
		$this->session->set_userdata('user_id', 0);
		redirect('/');
	}

}
