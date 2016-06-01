<?php
class Kontak extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->model('m_buku');				
	}
//index for showing the login form
	function index() {
	$this->load->view('v_kontak');
	
}
}
?>