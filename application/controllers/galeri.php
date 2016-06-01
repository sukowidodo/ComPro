<?php
class Galeri extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->model('m_galeri');				
	}
//index for showing the login form


	function images(){
		$data['galeri'] = $this->m_galeri->view_img();
		$this->load->view('v_gal_images',$data);
	}

	function video(){
		$data['video'] = $this->db->get('video')->result();
		$this->load->view('v_gal_video',$data);
	}
}
?>