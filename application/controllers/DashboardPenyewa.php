<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DashboardPenyewa extends CI_Controller {
    
        public function index()
        {   
        	$this->load->model('penyewa');
        	$data['kost'] = $this->penyewa->get_all_kost();

            $this->load->view('penyewa/dashboard', $data);
        }

        public function view()
        {
        	$this->load->model('penyewa');
            $id_kost = $this->uri->segment(3);
            $x['data'] = $this->penyewa->get_kost_by_id($id_kost);
            $this->load->view('penyewa/view_kostbyid', $x);
        }

 	}
 ?>