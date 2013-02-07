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
	
	public function add_to_homepage($name)
	{
		$id = $this->input->post('id');
		$content = $this->input->post('content');
		$data = array(
			'content' => $content,
		);
		$this->db->where('name', $name);
		$this->db->update('homepage', $data);
	}
}

?>