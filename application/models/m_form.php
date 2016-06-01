<?php
class M_form extends CI_Model { 
  
    public function InsertData(){
	$res = $this->db->insert($tablename,$data);
    return $res;
	}
	}
