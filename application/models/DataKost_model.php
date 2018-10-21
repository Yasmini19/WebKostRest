<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataKost_model extends CI_Model
	{
		public function getDataKost()
		{
			$query = $this->db->get("kost");
			return $query->result();
		}

		public function getKost($id)
		{
			$this->db->where('id_kost',$id);
			$query = $this->db->get("kost");
			return $query->result();
		}

		public function insertDataKost()
		{
				$object = array(
						'id_user' => $this->input->post('id_user'),
						'nama_kost' => $this->input->post('nama_kost'),
						'alamat' => $this->input->post('alamat'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'tersedia' => $this->input->post('tersedia'),
						'status' => $this->input->post('status'),
						'fasilitas' => $this->input->post('fasilitas'),
						'harga' => $this->input->post('harga'),
						'foto' => $this->upload->data('file_name')
						);
					$this->db->insert('kost', $object);
		}

		public function updateById($id_kost)
		{
		$data = array(
				'id_user' => $this->input->post('id_user'),
						'nama_kost' => $this->input->post('nama_kost'),
						'alamat' => $this->input->post('alamat_kost'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'tersedia' => $this->input->post('tersedia'),
						'status' => $this->input->post('status'),
						'fasilitas' => $this->input->post('fasilitas'),
						'harga' => $this->input->post('harga'),
						'foto' => $this->upload->data('file_name')
		);

		$this->db->where('id_kost', $id_kost);
		$this->db->update('kost', $data);
		}

		public function delete($id_kost)
		{
			if ($this->db->delete("kost","id_kost = ".$id_kost))
			return true;
		}
	}
?>