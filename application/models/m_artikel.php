<?php
class M_Artikel extends CI_Model { 
  
    public function InsertData(){
	$res = $this->db->insert($tablename,$data);
    return $res;
	}
	}
