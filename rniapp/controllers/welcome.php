<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		$data['title'] = "Inicio";
		$data['top_active'] = "active";
		$this->load->view('templates/header_top', $data);
		$this->load->view('templates/jquery');
		$this->load->view('templates/bootstrap');
		$this->load->view('templates/font-awesome');
		$this->load->view('templates/header_bot');
		
		if ($this->tank_auth->is_logged_in()) {
			// Entra usuario registrado
			//redirect('/auth/login/');
			$this->load->view('templates/nav/nav_template', $data);
			$this->load->view('templates/nav/nav_registrado');
		} else {
			// Entra visitante
			/*$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$this->load->view('welcome', $data);*/
			$this->load->view('templates/nav/nav_template');
			$this->load->view('templates/nav/nav_visitante');
		}

		$this->load->view('index/bienvenido');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */