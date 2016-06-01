<?php
class Adm_Video extends CI_Controller {
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
	if($this->session->userdata['sesi']['username'])
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		$data['video'] = $this->db->get("video")->result();
		$this->load->view('admin/v_video',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	
	
}
public function tambah(){
	$judul = $this->input->post('judul');
	$id_youtube = $this->input->post('id_youtube');

	$datainsert = array(
		'judul' => $judul,
		'id_youtube' => $id_youtube 
		);

	$res = $this->db->insert('video',$datainsert);
	if ($res>=1) {
		redirect('/adm_video');
	}else{
		echo "insert error";
	}
}

public function hapus($id){
	$this->db->where('id_video',$id);
	$res = $this->db->delete('video');
	if ($res>=1) {
		redirect('/adm_video');
	}else{
		echo 'delete error';
	}

}

}
?>