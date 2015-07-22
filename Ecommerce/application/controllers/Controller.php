<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('googlemaps');

	}

	 public function index()
	{
		$config = array();
		$config['center'] = 'London, UK';
		$config['zoom'] = 3;
		$this->googlemaps->initialize();
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('users/index');

		//$this->load->view('/products/index', $data);
		//$this->load->view('/products/countrycode_to_continent');
		//$this->load->view('/products/getcountry');
		//$this->load->view('/products/jsontophp');
  }

	public function process()
	{
		$coord = json_decode($_POST['json']);
		var_dump($coord);
	}

	public function processCoords(){
		var_dump($this->input->post());
	}

}
