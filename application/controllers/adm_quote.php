<?php
class Adm_Quote extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
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
public function index(){
	if($this->session->userdata['sesi']['username'])
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		 $this->db->order_by('date_quote','DESC');
 		$data['quote'] = $this->db->get('quote')->result();
		$this->load->view('admin/v_quote',$data);
		}
	else
	{
		redirect('login','refresh');
		}
	}

public function hapus($id){
	$this->db->where('id_quote',$id);
	$res = $this->db->delete('quote');
	if($res>=1){
		redirect('/adm_quote');
	}else{
		echo 'error';
	}
}

public function tambah(){
	$quote = $_POST['quote'];
	$date = date('Y-m-d');

	$datainsert = array('quote' => $quote,
	'date_quote' => $date
	);

	$res = $this->db->insert("quote",$datainsert);

	if ($res>=1) {
		redirect('/adm_quote');
	}else{
		echo "gagal";
	}


}
}
?>