<?php

/**
 * 
 */
class User_model extends CI_Model
{
	
	function return_users()
	{
			$this->load->database();
			$query = $this->db->get('users');  // Produces: SELECT * FROM mytable

			//$query = $this->db->query("select * from users");
			$query->result_array();

			// echo "<pre>";
			// print_r($query->result_array());
			// echo "</pre>";	

			//also cal return like this
			//return $query->result_array();

			//also cal return like this
			return $query->result();
	}
}

?>