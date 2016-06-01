<?php
class M_about extends CI_Model { 
  
    public function tampil(){
	$res = $this->db->query('SELECT * FROM about limit 1')->result();
    return $res;
	}
	}
