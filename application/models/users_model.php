<?php

class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function list_users()
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
}

?>