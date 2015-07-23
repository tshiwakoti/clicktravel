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
    redirect('/');
  }

  public function edit($id)
  {
    $order = $this->Admin->get_order_by_id($id);
    $this->load->view('admin/partials/edit', array('order' => $order));    
  }

  public function all(){
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function editProcess(){
    $this->Admin->edit($this->input->post());
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function delete(){
    $this->Admin->deleteOrder($this->input->post());
    $orders = $this->Admin->getorders();
    $this->load->view('admin/partials/orders', array('orders' => $orders));
  }

  public function allProducts(){
    $products = $this->Admin->getpackages();
    $this->load->view('admin/partials/packages', array('packages' => $products));
  }

  public function newPackage(){
    $cities = $this->Admin->get_cities();
    $this->load->view('admin/partials/newPackage', array('cities' => $cities));
  }

  public function newPackageProcess(){
    $this->Admin->add_package($this->input->post());
    $products = $this->Admin->getpackages();
    $this->load->view('admin/partials/packages', array('packages' => $products));
  }

  public function deletePackage(){
    $this->Admin->delete_package($this->input->post());
    $products = $this->Admin->getpackages();
    $this->load->view('admin/partials/packages', array('packages' => $products));
  }

  public function editPackage($id){
    $cities = $this->Admin->get_cities();
    $package = $this->Admin->get_package_by_id($id);
    $this->load->view('admin/partials/editPackage', array('cities' => $cities, 'package' => $package));
  }

  public function editPackageProcess(){
    $this->Admin->edit_package($this->input->post());
    $products = $this->Admin->getpackages();
    $this->load->view('admin/partials/packages', array('packages' => $products));
  }

  public function searchPackages(){
    $results = $this->Admin->get_packages_by_key($this->input->post());
    $this->load->view('admin/partials/packages', array('packages' => $results));
  }

  public function searchOrders(){
    $results = $this->Admin->get_orders_by_key($this->input->post());
    $this->load->view('admin/partials/orders', array('orders' => $results));
  }
}


?>
