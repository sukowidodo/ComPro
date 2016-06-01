<?php
class Login extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('admin/m_home');				
}
//index for showing the login form
function index() {
$this->load->view('login_view');
}
//this function will do the login process 
function proseslogin() {
$username = $this->input->post('username'); //read the username that filled by the user
$password = $this->input->post('password'); //read the password that filled by the user
$passwordx = md5($password); //this is for change $password into MD5 form
//the query is to matching the username+password user with username+password from database
$q = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$passwordx'");
if ($q->num_rows() == 1) { 
// if the query is TRUE, then save the username into session and load the welcome view
$nama = $q->row()->username;
$level = $q->row()->level;
$arai = array(
	'username' => $nama,
	'level' =>$level
	);
$sesi = $this->session->set_userdata('sesi',$arai);
//$data['kategori'] = $this->m_home->kategori();
//$data['list'] = $this->m_home->listartikel();
//$this->load->view('admin/v_home', $data, $sesi);
redirect('/adm_index');
}
else { 
// query error
$data['error']='!! Wrong Username or Password !!';
$this->load->view('login_view', $data);
}
}
//to do logout process
function logout() {	
$this->session->sess_destroy();
$data['logout'] = 'You have been logged out.';		
$this->load->view('login_view', $data);
}

}
?>