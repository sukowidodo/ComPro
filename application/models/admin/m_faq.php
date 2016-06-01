<?php
class M_faq extends CI_Model { 
  
    public function view(){
	$res = $this->db->get('faq')->result();
    return $res;
	}

	}
