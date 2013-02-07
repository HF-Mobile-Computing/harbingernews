<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}
	
	public function homepage()
	{
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('admin/homepage');
		$this->load->view('templates/footer');
	}
}
?>