<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sports extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sports_model');
	}
	
	public function index()
	{
		$data['sports'] = $this->sports_model->get_sports();
		$data['title'] = 'Sports';
		$data['username'] = $this->ion_auth->users()->row()->username;
	
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('sports/index_head');
		$this->load->view('templates/header', $data);
		$this->load->view('sports/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug)
	{
		$data['sports_item'] = $this->sports_model->get_sports($slug);
		
		if(empty($data['sports_item']))
		{
			show_404();
		}
		
		$data['title'] = $data['sports_item']['title'];
		$data['username'] = $this->ion_auth->users()->row()->username;
		
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('sports/view_head.php', $data);
		$this->load->view('templates/header.php', $data);
		$this->load->view('sports/view', $data);
		$this->load->view('templates/footer.php');
	}
	
}
?>