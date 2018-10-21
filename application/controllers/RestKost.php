<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\libraries\REST_Controller;

class RestKost extends REST_Controller {

     function __construct($config = 'rest'){
        parent::__construct($config);
        $this->load->database();
     }
    
     function index_get() {
        $id_kost = $this->get('id_kost');
        if ($id_kost == '') {
            $kost = $this->db->get('kost')->result();
        } else {
            $this->db->where('id_kost', $id_kost);
            $kost = $this->db->get('kost')->result();
        }
        $this->response($kost, 200);
    }
    function index_post() {
        $data = array(
                    'id_user'       => $this->post('id_user'),
                    'nama_kost'     => $this->post('nama_kost'),
                    'alamat'        => $this->post('alamat'),
                    'latitude'      => $this->post('latitude'),
                    'longitude'     => $this->post('longitude'),
                    'tersedia'      => $this->post('tersedia'),
                    'status'        => $this->post('status'),
                    'fasilitas'     => $this->post('fasilitas'),
                    'harga'         => $this->post('harga'),
                    'pengunjung'    => $this->post('pengunjung'),
                    'foto'          => $this->post('foto')
                );
        $insert = $this->db->insert('kost', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_put() {
        $nim = $this->put('id_kost');
        $data = array(
                    'id_user'       => $this->put('id_user'),
                    'nama_kost'     => $this->put('nama_kost'),
                    'alamat'        => $this->put('alamat'),
                    'latitude'      => $this->put('latitude'),
                    'longitude'     => $this->put('longitude'),
                    'tersedia'      => $this->put('tersedia'),
                    'status'        => $this->put('status'),
                    'fasilitas'     => $this->put('fasilitas'),
                    'harga'         => $this->put('harga'),
                    'pengunjung'    => $this->put('pengunjung'),
                    'foto'          => $this->put('foto'));
        $this->db->where('id_kost', $id_kost);
        $update = $this->db->update('kost', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
        function index_delete() {
        $nim = $this->delete('id_kost');
        $this->db->where('id_kost', $id_kost);
        $delete = $this->db->delete('kost');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>