<?php
class M_buku extends CI_Model { 
  
    function view($num, $offset)  {

	  /*variable num dan offset digunakan untuk mengatur jumlah

	    data yang akan dipaging, yang kita panggil di controller*/

	   $this->db->order_by('id_buku', 'ASC');
	  $query = $this->db->get("buku",$num, $offset);

	  return $query->result();
	}

	function seo($idx){
		$this->db->where('id_buku', $idx);
		$res = $this->db->get('seo');
		return $res->result();

	}
	}
