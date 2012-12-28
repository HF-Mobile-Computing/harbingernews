<?php
class Homepage_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function upcomingName()
	{
		$query = $this->db->query("SELECT name FROM homepage WHERE id = 1");
		
		foreach ($query->result() as $row)
		{
			return $row->name;
		}
	}
	
	public function upcomingContent()
	{
		$query = $this->db->query("SELECT content FROM homepage WHERE id = 1");
		
		foreach ($query->result() as $row)
		{
			return $row->content;
		}
	}
	
	public function recentName()
	{
		$query = $this->db->query("SELECT name FROM homepage WHERE id = 2");
		
		foreach ($query->result() as $row)
		{
			return $row->name;
		}
	}
	
	public function recentContent()
	{
		$query = $this->db->query("SELECT content FROM homepage WHERE id = 2");
		
		foreach ($query->result() as $row)
		{
			return $row->content;
		}
	}
}
?>