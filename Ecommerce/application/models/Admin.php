<?php

class Admin extends CI_Model {


  public function login($post)
  {
  $check_admin = "SELECT * FROM admins WHERE admins.email = ?";
  $admin = $this->db->query($check_admin, array($post["email"]))->row_array();
  if($admin){
    if(($post['password']) == $admin['password']){
      return $admin;
    }
    else
    {
      return false;
    }
    }
    else
    {
      return false;
    }
  }


  public function getorders()
  {
    return $this->db->query("SELECT orders.id, orders.billingaddress, orders.billingaddress2, orders.billingzipcode,
      orders.billingcity, orders.billingstate, orders.created_at, users.first_name, users.last_name, packages.price
       from orders LEFT JOIN users on users.id = orders.user_id LEFT JOIN  packages on orders.package_id = packages.id;")->result_array();
  }

  public function getpackages()
  { return $this->db->query("SELECT packages.id, packages.duration, packages.price,
    cities.name from packages LEFT JOIN cities on cities.id = packages.city_id;")->result_array();

  }

}
 ?>
