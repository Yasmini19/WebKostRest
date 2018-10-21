<?php 

class C_member extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_member');

	}

	function index(){
		//$this->load->view('index_m');
		
		$this->load->model('m_member');
		$data['data_list'] = $this->m_member->getBooking();
		$this->load->view('booking_u', $data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('c_user'));
	}

	function display($file){
		if($file == 'package'){
			$this->load->view('package_m');
		}
		else if($file == 'about'){
			$this->load->view('about_m');
		}
		else if($file == 'services'){
			$this->load->view('services_m');
		}
		else if($file == 'regulation'){
			$this->load->view('regulation_m');
		}
		else if($file == 'gallery'){
			$this->load->view('gallery_m');
		}
		else if($file == 'contact'){
			$this->load->view('contact_m');
		}
		else if($file == 'profile'){
			$this->load->view('profile_m');
		}
		else if($file == 'administration'){
			$this->load->view('administration_m');
		}
		else if($file == 'setting'){
			$this->load->view('setting_m');
		}
	}
}