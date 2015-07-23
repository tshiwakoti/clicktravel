<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->model('Admin');



	}

	 public function index()
	{
    //$this->load->view('/Admin/login');

    if ($this->session->userdata("logged_in") == true)
    {
      redirect('Admins/displayorders');
    }
    else
    {
      $this->load->view('/Admin/login');
    }
  }


  public function login()
  {
    //var_dump($this->input->post());
    $is_logged = $this->Admin->login($this->input->post());


  if($is_logged){
    // $this->session->set_userdata('id', $is_logged['id']);
    // $this->session->set_userdata('name', $is_logged['name']);
    $this->session->set_userdata('email', $is_logged['email']);
    $this->session->set_userdata("logged_in", true);
    redirect('/');
  }

  // else
  // {
  //   $this->load->view('/Admin/login');
  //
  // }
}

public function displayorders()
{
  $orders = $this->Admin->getorders();
  $this->load->view('Admin/Orders', array('orders' => $orders));
}


public function displaypackages()
{
  $packages = $this->Admin->getpackages();
  $this->load->view('/Admin/products', array('packages' => $packages));
}


public function logoff()
  {
    $this->session->sess_destroy();
    $this->load->view('/Admin/login');
  }
}

?>
