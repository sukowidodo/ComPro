<?php
class M_galeri extends CI_Model { 
  
    public function kategori(){
	$res = $this->db->get('kategori')->result();
    return $res;
	}

	public function listartikel(){
		$res = $this->db->get('artikel')->result();
		return $res;
	}

	}
  