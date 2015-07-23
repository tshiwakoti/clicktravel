<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
		$this->load->library('session');
		$this->load->library('googlemaps');
		$this->load->model('Model');

	}

	 public function index()
	{
		$this->load->view('users/index');
  }

	public function processCoords(){
		$post = $this->input->post();
		//SEND COORDINATES TO MODEL FOR DB PROCESSING
		$cities = $this->Model->getCities($post['lat'], $post['lng']);
		$results = array('results' => $post, 'cities' => $cities);
		
		$this->load->view('users/trips', $results);
		

	}

}
