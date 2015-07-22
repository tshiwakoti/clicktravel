<?php

class Model extends CI_Model {

	public function getCities($latitude, $longitude)
	{
		$query = "SELECT name, description FROM cities
					WHERE ({$latitude} > lat-10 AND {$latitude} < lat+10) AND ({$longitude} > lng-10 AND {$longitude} < lng+10);";
		return $this->db->query($query)->result_array();
		
	}

 }
 ?>