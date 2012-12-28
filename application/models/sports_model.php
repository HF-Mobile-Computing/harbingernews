<?php

class Sports_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_sports($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$query = $this->db->get('sports');
			return $query->result_array();
		}
		$query = $this->db->get_where('sports', array('slug' => $slug));
		return $query->row_array();
		
	}
	
}

?>