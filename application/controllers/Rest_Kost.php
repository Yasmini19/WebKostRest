<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Rest_Kost extends REST_Controller
{
    function __construct($config = 'rest')
    { parent::__construct($config); }

    public function index_get()
    {
        $id = $this->get('id_kost');
        if ($id == '')
        {
            //$this->db->select('*');       
            $this->db->select('id_kost, kost.id_user, nama_kost, jenis_kost, fasilitas, harga, alamat_kost, stok, foto, longitude, latitude, kost.no_tlp');
            $this->db->join('tabel_user', 'kost.id_user = tabel_user.id_user');
            $kos = $this->db->get('kost')->result();
        }
        else
        {
            //$this->db->select('*');
            $this->db->select('id_kost, kost.id_user, nama_kost, jenis_kost, fasilitas, harga, alamat_kost, stok, foto, longitude, latitude, kost.no_tlp');
            $this->db->join('tabel_user', 'kost.id_user = tabel_user.id_user');
            $this->db->where('id_kost', $id);
            $kos = $this->db->get('kost')->row();
        }
        $this->response($kos, 200);
    }

    function index_post()
    {
        $data = [
            'id_user' => $this->post('id_user'),
            'nama_kost' => $this->post('nama_kost'),
            'jenis_kost' => $this->post('jenis_kost'),
            'fasilitas' => $this->post('fasilitas'),
            'harga' => $this->post('harga'),
            'alamat_kost' => $this->post('alamat_kost'),
            'stok' => $this->post('stok'),
            'longitude' => $this->post('longitude'),
            'latitude' => $this->post('latitude'),
            'no_tlp' => $this->post('no_tlp')
        ];
        $insert = $this->db->insert('kost', $data);
        if ($insert)
        { $this->response($data, 200); }
        else
        { $this->response(array('status' => 'Gagal!', 502)); }
    }

    function index_put()
    {
        $id = $this->put('id_kost');
        $data = array(
            'id_user' => $this->put('id_user'),
            'nama_kost' => $this->put('nama_kost'),
            'jenis_kost' => $this->put('jenis_kost'),
            'fasilitas' => $this->put('fasilitas'),
            'harga' => $this->put('harga'),
            'alamat_kost' => $this->put('alamat_kost'),
            'stok' => $this->put('stok'),
            'longitude' => $this->put('longitude'),
            'latitude' => $this->put('latitude'),
            'no_tlp' => $this->put('no_telp')
        );

        $this->db->where('id_kost', $id);
        $update = $this->db->update('kost', $data);
        if ($update)
        { $this->response($data, 200); }
        else
        { $this->response(array('status' => 'Gagal!', 502)); }
    }

    function index_delete()
    {
        $id = $this->delete('id_kost');
        $this->db->where('id_kost', $id);
        $delete = $this->db->delete('kost');
        if ($delete)
        { $this->response(array('status' => 'ID Kost '.$id.' Berhasil Dihapus!'), 201); }
        else
        { $this->response(array('status' => 'Gagal!', 502)); }
    }
}

/* End of file Rest_Kost.php */

?>