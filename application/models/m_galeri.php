<?php
class M_galeri extends CI_Model { 
  
    public function view_img(){
		$res = $this->db->get('album')->result();
		return $res;
	}
	}
