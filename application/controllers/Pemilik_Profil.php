<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik_Profil extends CI_Controller
{
    public function index()
    {   
        $this->load->model('User_model');
        $data['data'] = $this->User_model->getData($this->session->userdata('logged_in')['username']);
        
        $this->load->view('pemilik/pemilik_profil.php', $data);
    }
}