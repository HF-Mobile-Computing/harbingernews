<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$sql = "SELECT ? FROM homepage WHERE id = ?";
		$data['upcomingName'] = $this->db->query($sql, array('name', 1));
		$data['upcomingContent'] = $this->db->query($sql, array('content', 1));
		$data['recentName'] = $this->db->query($sql, array('name', 2));
		$data['recentContent'] = $this->db->query($sql, array('content', 2));
				
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */