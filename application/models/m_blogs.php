<?php
class M_blogs extends CI_Model { 
  
 	function view($num, $offset)  {
 		
	   $this->db->order_by('id_artikel', 'DESC');
	  $query = $this->db->get("artikel",$num, $offset);

	  return $query->result();
	}

			public function baca($id){
				$result = $this->db->query("SELECT * FROM artikel where slug ='$id' limit 1");
				return $result->result();
			}

			public function kategori(){
				$result1 = $this->db->query("SELECT * FROM kategori");
				return $result1->result();
			}

			public function slider($id){
				$result1 = $this->db->query("SELECT * FROM slider where slug = '$id'");
				return $result1->result();
			}

			function kategori2($num, $offset,$id)  {

			  $this->db->where('id_kategori', $id);
			  $this->db->order_by('id_artikel', 'DESC');
			  $query = $this->db->get("artikel",$num, $offset);

			  return $query->result();
			}

			function seo($idx){
				$this->db->where('id_artikel', $idx);
				$res = $this->db->get('seo');
				return $res->result();

			}

	}
