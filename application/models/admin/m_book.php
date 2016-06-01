<?php
class M_book extends CI_Model { 
  
    public function kategori(){
	$res = $this->db->get('kategori')->result();
    return $res;
	}

	public function listbuku($num, $offset){
	$this->db->order_by('id_buku', 'DESC');
	  $query = $this->db->get("buku",$num, $offset);
	  return $query->result();
	}

	public function dataedit($id){
	 $query = $this->db->get_where('buku', array('id_buku' => $id));
	 return $query->result();
	}

	}
