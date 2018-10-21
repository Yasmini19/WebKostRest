<?php

class M_member extends CI_Model{

	public function getDataBooking{

		$query = $this->load->db->get("member");
        return $query->result();
	}

    public function getBooking{
        $this->db->where('id_kost',$id_kost);
        $query = $this->db->get("member");
        return $query->result();
    }
	
	public function insertBooking(){
		 $object = array(
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'nama_member' => $this->input->post('nama_member'),
                'password' => $this->input->post('password'),            
                'nik' => $this->input->post('nik'),
                'no_hp' => $this->input->post('no_hp'),
                'kota_lahir' =>$this->input->post('kota_lahir'),
                'tgl_lahir' =>$this->input->post('tgl_lahir'),
                'pekerjaan' =>$this->input->post('pekerjaan'),
                'alamat' =>$this->input->post('alamat'),
                'no_kamar' =>$this->input->post('no_kamar'),
                'tgl_gabung' =>$this->input->post('tgl_gabung'),
                'status' =>$this->input->post('status')
            );
        $this->db->insert('member',$object);
	}
}