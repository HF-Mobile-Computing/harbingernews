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
	
	public function getDate()
	{
		$query = $this->db->query("SELECT date FROM announcements ORDER BY id DESC LIMIT 1");
		
		foreach ($query->result() as $row)
		{
			return $row->date;
		}
	}
	
	public function getAorB()
	{
		$query = $this->db->query("SELECT a_or_b FROM announcements ORDER BY id DESC LIMIT 1");
		
		foreach ($query->result() as $row)
		{
			return $row->a_or_b;
		}
	}
	
	public function getAnnouncements()
	{
		$query = $this->db->query("SELECT announcements FROM announcements ORDER BY id DESC LIMIT 1");
		
		foreach ($query->result() as $row)
		{
			return $row->announcements;
		}
	
	}
}
?>