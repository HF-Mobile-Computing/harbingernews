<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url');
	}
	
	public function index()
	{
		if($this->ion_auth->is_admin())
		{
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/index');
			$this->load->view('templates/footer');
		} else {
			redirect('/', 'refresh');
		}
	}
	
	public function homepage()
	{
		if($this->ion_auth->is_admin())
		{
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/homepage');
			$this->load->view('templates/footer');
			if( $this->input->post('submit') ) {
				$this->admin_model->add_announcement();
			}
		} else {
			redirect('/', 'refresh');
		}
	}
}
?>