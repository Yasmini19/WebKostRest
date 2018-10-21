<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Kost_p extends CI_Controller {
    
        public function index()
        {   
        	$this->load->helper('url','form');
		    $this->load->model('Kost_p_model');
		    $data['k_list']= $this->Kost_p_model->getKost();
            $this->load->view('pemilik/kost_p.php', $data);
        }

        public function create()
		{

			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->model('Kost_p_model');
			$this->load->model('DataKost_model');
			$this->form_validation->set_rules('id_user', 'Id User', 'trim|required');
			$this->form_validation->set_rules('nama_kost', 'Nama ', 'trim|required');
			$this->form_validation->set_rules('jenis_kost', 'Jenis Kost', 'trim|required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('alamat_kost', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('no_tlp', 'No Telp', 'trim|required');
			$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
			$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
			$this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');
	//		$this->form_validation->set_rules('gb_barang', 'Gambar Barang', 'trim|required');
			

			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('pemilik/tambah_KostP_view');
			}else{
				$config['upload_path']     = './assets/upload';
				$config['allowed_types']  = 'gif|jpg|png';
				$config['max_size']		   = 1000000000;
				$config['max_width']       = 10240;
				$config['max_height']	   = 7680;

			$this->load->library('upload',$config);
			if (! $this->upload->do_upload('foto'))
			{
			
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('pemilik/tambah_KostP_sukses',$error);
			}
			else
			{
				$this->Kost_p_model->insertKostP();
				$this->load->view('pemilik/tambah_KostP_sukses');
			}
			}
		}

		public function updateData($id)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('id_user', 'Id User', 'trim|required');
			$this->form_validation->set_rules('nama_kost', 'Nama ', 'trim|required');
			$this->form_validation->set_rules('jenis_kost', 'Jenis Kost', 'trim|required');
			$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required');
			$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
			$this->form_validation->set_rules('alamat_kost', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('no_tlp', 'No Telp', 'trim|required');
			$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
			$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
			$this->form_validation->set_rules('longitude', 'Longitude', 'trim|required');

			$this->load->model('Kost_p_model');
			$data['kost']= $this->Kost_p_model->getAllKost($id);

			if ($this->form_validation->run()==FALSE)
			{
				$this->load->view('pemilik/edit_Kostp_view', $data);
			}else{
				$config['upload_path']	= './assets/upload/';
				$config['allowed_types']= 'gif|jpg|png';
				$config['max_size']		= '1000000000';
				$config['max_width']	= '10240';
				$config['max_height']	= '7680';

				$this->load->library('upload', $config);
				if (! $this->upload->do_upload('foto')) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('pemilik/edit_Kostp_view',$data,$error);
				}else{
					$this->Kost_p_model->updateById($id);
					$this->load->view('pemilik/edit_kostp_sukses');
				}
			}
		}

	public function deleteData($id_kost)
	{
		$this->load->helper("url");
		$this->load->model("Kost_p_model");
		$this->Kost_p_model->delete($id_kost);
		redirect('pemilik/kost_p');
	}
 	}

 	
 ?>