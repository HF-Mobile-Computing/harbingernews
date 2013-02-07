<?php

class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function add_announcement()
	{
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$a_or_b = $this->input->post('a_or_b');
		$announcements = $this->input->post('announcements');
		$data = array(
			'date' => $this->input->post('date'),
			'a_or_b' => $this->input->post('a_or_b'),
			'announcements' => $this->input->post('announcements'),
		);
		$this->db->insert('announcements',$data);
	}
	
	public function add_post()
	{
		
	}
}

?>