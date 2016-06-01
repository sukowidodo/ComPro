<?php
class Home extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->library('upload');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('m_home');				
	}
//index for showing the login form

	function index() {
	$data['slider'] = $this->m_home->slider();
	$data['about'] = $this->db->query("select * from about limit 1")->result();
	$data['quote'] = $this->db->query("select * from quote order by RAND() limit 1")->result();
	$data['testi'] = $this->db->query("select * from testimonial order by RAND() limit 2")->result();
	$data['company'] = $this->db->get('company')->result();
	$data['total'] = $this->db->count_all_results('company');
	$this->load->view('v_home',$data);
	}


}
?>