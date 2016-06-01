<?php
class M_home extends CI_Model { 
  
		    public function slider(){
			$res = $this->db->query('SELECT * FROM slider LIMIT 3')->result();
		    return $res;
			}
	}
