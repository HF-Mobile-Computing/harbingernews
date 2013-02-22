<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->helper('url');
		$this->load->model('users_model');
	}
	
	public function index()
	{
		redirect('/','refresh');
	}
	
	public function new_user()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('password1', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password1]');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->helper('form');
			$this->load->view('templates/sessions');
			$this->load->view('users/new');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password1');
			$email = $this->input->post('email');
			
		}
		
		if($this->form_validation->run() == TRUE && $this->ion_auth->register($username, $password, $email))
		{
			redirect('/','refresh');
		}
	}


}

?>