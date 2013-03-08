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
		redirect('admin/add_announcement','refresh');
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
		if ("upcoming" == $name) {
			redirect('/admin/add_upcoming','refresh');
		} else {
			redirect('/admin/add_recent','refresh');
		}
	}
	
	public function update_sport($slug)
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$season = $this->input->post('title');
		$content = $this->input->post('content');
		$photo_path = $this->input->post('photo_path');
		$data = array(
			'content' => $content,
		);
		$this->db->where('slug', $slug);
		$this->db->update('sports', $data);
		redirect('/admin/sports/' . $slug,'refresh');
	}
	public function update_club($slug)
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$type = $this->input->post('title');
		$content = $this->input->post('content');
		$data = array(
			'content' => $content,
		);
		$this->db->where('slug', $slug);
		$this->db->update('clubs', $data);
		redirect('/admin/clubs/' . $slug,'refresh');
	}
}

?>