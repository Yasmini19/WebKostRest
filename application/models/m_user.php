<?php

class M_user extends CI_Model{

	function getMember($member,$id_member){		
		return $this->db->get_where($member,$id_memSber);
	}	

	
}