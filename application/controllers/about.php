<?php
class About extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->library('upload');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('m_about');				
	}
//index for showing the login form
	function index() {
	$res = $this->m_about->tampil();
	$data['res'] = $res;
	$this->load->view('v_about',$data);
	}

}
?>