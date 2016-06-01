<?php
class Faq extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->model('admin/m_faq');				
	}
//index for showing the login form
	function index() {
	$data['faq'] = $this->m_faq->view();
	$this->load->view('v_faq',$data);
	
}
}
?>