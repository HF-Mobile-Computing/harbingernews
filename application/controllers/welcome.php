<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('homepage_model');
	}

	public function index()
	{
		$data['upcomingName'] = $this->homepage_model->upcomingName();
		$data['upcomingContent'] = $this->homepage_model->upcomingContent();
		$data['recentName'] = $this->homepage_model->recentName();
		$data['recentContent'] = $this->homepage_model->recentContent();
						
		$this->load->view('templates/sessions');
		$this->load->helper('url');
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */