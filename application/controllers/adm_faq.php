<?php
class Adm_Faq extends CI_Controller {
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
		 		$data['action'] = base_url().'adm_faq/tambah';
		 		$data['faq'] = $this->m_faq->view();
				$this->load->view('admin/v_faq',$data);
				}
				}

		public function dataedit($id){

			if ($this->session->userdata['sesi']['username']) {
				$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
					$data['faq'] = $this->m_faq->view();
					$this->db->where('id_faq',$id);
					$res = $this->db->get('faq')->result();
					foreach ($res as $row) {
						$data['question'] = $row->question;
						$data['answer'] = $row->answer;
						$data['id_faq'] = $row->id_faq;
					}
					$data['action'] = base_url().'adm_faq/update';
					$this->load->view('admin/v_faq',$data);
					}		

		}

		public function update(){
			$question = $this->input->post('question');
			$answer = $this->input->post('answer');
			$id_faq = $this->input->post('id_faq');
			$dataupdate = array(
				'question' => $question,
				'answer' => $answer 
				);
		$this->db->where('id_faq', $id_faq);
		$res = $this->db->update('faq', $dataupdate); 
			if ($res>=1) {
				redirect('/adm_faq');
			}else{
				echo 'update gagal';
			}

		}

		public function tambah(){
			$answer = $_POST['answer'];
			$question = $_POST['question'];

			$datainsert = array(
				'answer' => $answer,
				'question' => $question 
				);
			$res = $this->db->insert('faq',$datainsert);
		    if ($res>=1) {
		    	redirect('/adm_faq','refresh');
		    }else{
		    	echo "error";
		    }  
			}

		public function hapus($id){
			$this->db->where('id_faq',$id);
			$res = $this->db->delete('faq');

			if($res>=1){
				redirect('/adm_faq');
			}else{
				echo 'error';
			}
		}
}
?>