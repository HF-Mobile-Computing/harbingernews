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
			$this->load->model('club_model');

			$data['winter'] = $this->sports_model->get_list('winter');
			$data['fall'] = $this->sports_model->get_list('fall');
			$data['spring'] = $this->sports_model->get_list('spring');

			$data['arts'] = $this->club_model->get_type('arts');
			$data['academic'] = $this->club_model->get_type('academic');
			$data['community'] = $this->club_model->get_type('community');
			$data['cultural'] = $this->club_model->get_type('cultural');
			$data['science'] = $this->club_model->get_type('science');
			$data['services'] = $this->club_model->get_type('services');
			$data['all'] = $this->club_model->get_type('all');
			
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/index',$data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
			redirect('/', 'refresh');
		}
	}
	
	public function user_list()
	{
		if($this->ion_auth->is_admin())
		{
			$this->load->model('users_model');
			
			$data['user_list'] = $this->users_model->list_users();
			
			$this->load->view('templates/sessions');
			$this->load->view('admin/list_users',$data);
			$this->load->view('templates/footer');
		} else {
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
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
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
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
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
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
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
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
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
			redirect('/', 'refresh');
		}
	}

	public function clubs($slug)
	{
		if($this->ion_auth->is_admin())
		{
		
			$this->load->model('club_model');
			$data['club_item'] = $this->club_model->get_clubs($slug);
			$data['all'] = $this->club_model->get_type('all');
			
			if(empty($data['club_item']))
			{
				show_404();
			}
			
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/club_page',$data);
			$this->load->view('templates/footer');
			if( $this->input->post("submit") ) {
				$this->admin_model->update_club($slug);
			}
		} else {
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
			redirect('/', 'refresh');
		}
	}
	public function club_announcements($slug)
	{
		if($this->ion_auth->is_admin())
		{
		
			$this->load->model('club_model');
			$data['club_item'] = $this->club_model->get_clubs($slug);
			$data['all'] = $this->club_model->get_type('all');
			
			if(empty($data['club_item']))
			{
				show_404();
			}
			
			$this->load->view('templates/sessions');
			$this->load->helper('url');
			$this->load->view('admin/club_announcements',$data);
			$this->load->view('templates/footer');
			if( $this->input->post("submit") ) {
				$this->admin_model->update_club($slug);
			}
		} else {
			$this->session->set_flashdata('info', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><b>Get out of here!</b> You don\'t have permission to access this part of the site.</div>');
			redirect('/', 'refresh');
		}
	}
}
?>