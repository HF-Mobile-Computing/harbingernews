<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clubs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('club_model');
	}
	public function index()
	{
		$data['arts'] = $this->club_model->get_type('arts');
		$data['academic'] = $this->club_model->get_type('academic');
		$data['community'] = $this->club_model->get_type('community');
		$data['cultural'] = $this->club_model->get_type('cultural');
		$data['science'] = $this->club_model->get_type('science');
		$data['services'] = $this->club_model->get_type('services');
		$data['title'] = 'Clubs';
		$data['username'] = $this->ion_auth->users()->row()->username;
		


		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('clubs/index_head');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/header2', $data);
		$this->load->view('clubs/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['club_item'] = $this->club_model->get_clubs($slug);
		
		if(empty($data['club_item']))
		{
			show_404();
		}
		
		$data['title'] = $data['club_item']['name'];
		$data['content'] = $data['club_item']['content'];
		$data['username'] = $this->ion_auth->users()->row()->username;
		
		$data['arts'] = $this->club_model->get_type('arts');
		$data['academic'] = $this->club_model->get_type('academic');
		$data['community'] = $this->club_model->get_type('community');
		$data['cultural'] = $this->club_model->get_type('cultural');
		$data['science'] = $this->club_model->get_type('science');
		$data['services'] = $this->club_model->get_type('services');


		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('clubs/view_head.php', $data);
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/header2.php', $data);
		$this->load->view('clubs/view', $data['club_item']);
		$this->load->view('templates/footer.php');
	}
}
?>