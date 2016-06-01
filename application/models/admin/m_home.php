<?php
class M_home extends CI_Model { 
  
    public function kategori(){
	$res = $this->db->get('kategori')->result();
    return $res;
	}

	public function listartikel($num, $offset){
	$this->db->order_by('id_artikel', 'DESC');
	  $query = $this->db->get("artikel",$num, $offset);
	  return $query->result();
	}

	public function update_data($id){
		$query = $this->db->query("select * from artikel where id_artikel = '$id'");
		$res = $query->result();
		return $res;

	}

	}
