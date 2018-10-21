<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Kost_p_model extends CI_Model
	{
		public function getKost()
		{
			$query = $this->db->get("kost");
			return $query->result();
		}

		public function getAllKost($id)
		{
			$this->db->where('id_kost',$id);
			$query = $this->db->get("kost");
			return $query->result();
		}

		public function insertKostP()
		{
				$object = array(
						'id_user' => $this->input->post('id_user'),
						'nama_kost' => $this->input->post('nama_kost'),
						'jenis_kost' => $this->input->post('jenis_kost'),
						'fasilitas' => $this->input->post('fasilitas'),
						'harga' => $this->input->post('harga'),
						'alamat_kost' => $this->input->post('alamat_kost'),
						'no_tlp' => $this->input->post('no_tlp'),
						'stok' => $this->input->post('stok'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'foto' => $this->upload->data('file_name')
						);
					$this->db->insert('kost', $object);
		}

		public function updateById($id_kost)
		{
		$data = array(
						'id_user' => $this->input->post('id_user'),
						'nama_kost' => $this->input->post('nama_kost'),
						'jenis_kost' => $this->input->post('jenis_kost'),
						'fasilitas' => $this->input->post('fasilitas'),
						'harga' => $this->input->post('harga'),
						'alamat_kost' => $this->input->post('alamat_kost'),
						'stok' => $this->input->post('stok'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'foto' => $this->upload->data('file_name'),
						'no_tlp' => $this->input->post('no_tlp')
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