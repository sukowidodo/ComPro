<?php
class Laman404 extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
			
	}
//index for showing the login form
	function index() {
	$this->load->view('404');
	}

	
}
?>