<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function cari($key){
    	//$query = $connection->query("SELECT * FROM kost a WHERE id_kost=$_GET[key]");
    	$this->db->query('SELECT * FROM kost a WHERE id_kost=$_GET[key]');
    	
    }

    public function get_all_kost() {
        // Urutkan berdasar abjad
        $this->db->order_by('nama_kost');
        $query = $this->db->get('kost');
        return $query->result();
    }

    public function get_kost_by_id($id_kost = 0){
        $this->db->select ('*');
        $query = $this->db->get_where('kost', array('id_kost' => $id_kost));
        $this->db->from('kost');
        return $query->row_array();
    }

}
?> 