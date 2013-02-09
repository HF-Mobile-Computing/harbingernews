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
			$this->load->model('sports_model');
			
			$data['winter'] = $this->sports_model->get_list('winter');
			$data['fall'] = $this->sports_model->get_list('fall');
			$data['spring'] = $this->sports_model->get_list('spring');
			
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/index',$data);
			$this->load->view('templates/footer');
		} else {
			redirect('/', 'refresh');
		}
	}
	
	public function add_announcement()
	{
		if($this->ion_auth->is_admin())
		{
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/add_announcements');
			$this->load->view('templates/footer');
			if( $this->input->post('submit') ) {
				$this->admin_model->add_announcement();
			}
		} else {
			redirect('/', 'refresh');
		}
	}
	
	public function add_upcoming()
	{
		if($this->ion_auth->is_admin())
		{
			$data['title'] = 'Add Upcoming Event';
			$data['name'] = 'add_upcoming';
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/add_to_homepage',$data);
			$this->load->view('templates/footer');
			if( $this->input->post('submit') ) {
				$this->admin_model->add_to_homepage('Upcoming Events');
			}
		} else {
			redirect('/', 'refresh');
		}
	}
	
	public function add_recent()
	{
		if($this->ion_auth->is_admin())
		{
			$data['title'] = 'Add Recent Events';
			$data['name'] = 'add_recent';
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/add_to_homepage',$data);
			$this->load->view('templates/footer');
			if( $this->input->post('submit') ) {
				$this->admin_model->add_to_homepage('Recent Events');
			}
		} else {
			redirect('/', 'refresh');
		}
	}
	
	public function sports($slug)
	{
		if($this->ion_auth->is_admin())
		{
		
			$this->load->model('sports_model');
			$data['sports_item'] = $this->sports_model->get_sports($slug);
			if(empty($data['sports_item']))
			{
				show_404();
			}
			
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/sports_page',$data);
			$this->load->view('templates/footer');
			if( $this->input->post("submit") ) {
				$this->admin_model->update_sport($slug);
			}
		} else {
			redirect('/', 'refresh');
		}
	}
}
?>