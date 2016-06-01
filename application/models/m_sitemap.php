<?php
class M_Sitemap extends CI_Model {
    function __construct() {
        parent::__construct();
    }
  
    function create() {
        $query = $this->db->get('artikel');
        return $query->result();
    }
    function buku() {
        $query = $this->db->get('buku');
        return $query->result();
    }
    function slider() {
        $query = $this->db->get('slider');
        return $query->result();
    }
}
?>