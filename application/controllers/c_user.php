<?php 

class C_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');

	}

	function index(){
		$this->load->view('index_u');
	}

	function search(){
		
	}

	function display($file){
		if($file == 'booking'){
			$this->load->view('booking_u');
		}
		else if($file == 'regulation'){
			$this->load->view('regulation_u');
		}
		else if($file == 'gallery'){
			$this->load->view('gallery_u');
		}
	}

	function login(){								
		$email = $this->input->post('email');					
		$password = $this->input->post('password');
		$where = array(	
			'email' => $email,
			'password' => $password
		);
		$ambil = $this->m_user->getMember('member',$where)->result_array();			
	    foreach ($ambil as $data) {								
	    	$data_session = array(												
     			'email' => $email,
     			'password' => $password,
     			'id_member' => $data['id_member'],
     			'nama_member' => $data['nama_member'],
     			'nik' => $data['nik'],
     			'no_hp' => $data['no_hp'],
     			'foto' => $data['foto'],
     			'kota_lahir' => $data['kota_lahir'],
   				'tgl_lahir' => $data['tgl_lahir'],
   				'pekerjaan' => $data['pekerjaan'],
   				'alamat' => $data['alamat'],
   				'no_kamar' => $data['no_kamar'],
   				'tgl_gabung' => $data['tgl_gabung'],
   				'status' => $data['status']
	    	);
	    $this->session->set_userdata($data_session);		
		}
	    if($this->session->userdata("id_member") != ''){							
	    	redirect("c_member");													
		}
		else{																		
			echo "<script>alert('Email atau password salah!');</script>";
			echo "<script>history.go(-1);</script>";
		}																			
	}																				
}