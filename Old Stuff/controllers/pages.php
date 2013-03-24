<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
	
	}
	
	public function about()
	{
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}
	
	public function our_team()
	{
		
	}
		
	public function get_involved()
	{
		
	}
}
?>