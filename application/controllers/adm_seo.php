<?php
class Adm_Seo extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->model('admin/m_faq');				
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
public function blog($id){
	if($this->session->userdata['sesi']['username'])
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		$this->db->where('id_artikel',$id);
 		$query = $this->db->get('artikel')->result();
 		foreach ($query as $value) {
 			$data['judul'] = $value->judul;
 			$data['id'] = $value->id_artikel;
 		}

 		$data['action'] = base_url().'adm_seo/blogseo';
		$this->load->view('admin/v_seo',$data);
		}
		}

public function buku($id){
	if($this->session->userdata['sesi']['username'])
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		$this->db->where('id_buku',$id);
 		$query = $this->db->get('buku')->result();
 		foreach ($query as $value) {
 			$data['judul'] = $value->judul_buku;
 			$data['id'] = $value->id_buku;
 		}

 		$data['action'] = base_url().'adm_seo/bukuseo';
		$this->load->view('admin/v_seo',$data);
		}
		}

public function blogseo(){
$id = $this->input->post('id');
$desc = $this->input->post('description');
$key = $this->input->post('keyword');

$data = array(
	'id_artikel' => $id ,
	'meta_description' => $desc ,
	'meta_keyword' => $key , 
	);

$res = $this->db->insert('seo', $data);
if($res>=1){
	redirect('/adm_index');
}
}

public function bukuseo(){
	$id = $this->input->post('id');
$desc = $this->input->post('description');
$key = $this->input->post('keyword');

$data = array(
	'id_buku' => $id ,
	'meta_description' => $desc ,
	'meta_keyword' => $key , 
	);

$res = $this->db->insert('seo', $data);
	if($res>=1){
		redirect('/adm_book');
	}
}

}
?>