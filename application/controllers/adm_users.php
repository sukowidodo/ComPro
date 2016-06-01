<?php
class Adm_Users extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('admin/m_galeri');				
}

public function count_users(){
$this->db->count_all('users');
return true;
}
public function count_artikel(){
$this->db->count_all('artikel');
return true;
}
public function count_buku(){
$this->db->get('buku')->num_rows();
return true;
}

public function index(){
	if($this->session->userdata['sesi']['username'] && $this->session->userdata['sesi']['level'] == "admin")
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		$data['level'] = "";
 		$data['users'] = $this->db->get('users')->result();
		$this->load->view('admin/v_users',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	
	
}

public function tambah()
{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$level = $this->input->post('level');

	$insertdata = array(
		'username' => $username,
		'password' => md5($password),
		'level' => $level 
		);

	$res = $this->db->insert('users',$insertdata);

	if ($res>=1) {
		redirect('adm_users');
	}else
	{
		echo "gagal";
	}
}

public function edit($id)
{
	$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
	$data['id'] = $id;
	$iki = $this->db->get_where('users',array('id_user' => $id))->result();
	foreach ($iki as $row) {
		$data['user'] = $row->username;
		$data['level'] = $row->level;
	}
	$data['users'] = $this->db->get('users')->result();

	$this->load->view('admin/v_users',$data);
}

public function update()
{
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$level = $this->input->post('level');
	$id = $this->input->post('id');

	$updatedata = array(
		'username' => $username,
		'password' => md5($password),
		'level' => $level 
		);
	$this->db->where('id_user',$id);
	$res = $this->db->update('users',$updatedata);

	if ($res>=1) {
		redirect('adm_users/edit/'.$id);
	}else
	{
		echo "gagal";
	}
}

public function hapus($id)
{
	$res = $this->db->delete('users',array('id_user' =>$id ));
	if ($res>=1) {
		redirect('adm_users');
	}else
	{
		echo "gagal";
	}
}

}
?>