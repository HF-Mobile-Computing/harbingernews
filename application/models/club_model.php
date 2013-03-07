<?php 

class club_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_clubs($slug = FALSE)
	{

		if($slug === FALSE)
		{
			$query = $this->db->get('clubs');
			return $query->result_array();
		}
		$query = $this->db->get_where('clubs', array('slug' => $slug));
		return $query->row_array();
		
	}
	public function get_type($type)
	{
		$query = $this->db->get_where('clubs', array('type' => $type));
		return $query->result_array();
	}
	public function get_name($name)
	{
		$query = $this->db->get_where('clubs', array('name' => $name));
		return $query->result_array();
	}
	public function get_announcements($announcements)
	{
		$query = $this->db->get('announcements', $announcements);
		return $query->result();
	}
}


 ?>