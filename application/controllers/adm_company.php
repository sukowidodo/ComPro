<?php
class Adm_Company extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('admin/m_faq');	
$this->load->helper('file');			
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
 		$data['company'] = $this->db->get('company')->result();
		$this->load->view('admin/v_company',$data);
		}else{
			redirect('/login');
		}
	}
function tambah(){
	$nama = $this->input->post('nama');
	$url = $this->input->post('url');
				$this->load->library('upload');
					        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
					        $config['upload_path'] = 'upload/temp'; //path folder
					        $upload_path = $config['upload_path'];
					        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
					        $config['max_size'] = '2048'; //maksimum besar file 2M
					        $config['max_width']  = '1288'; //lebar maksimum 1288 px
					        $config['max_height']  = '768'; //tinggi maksimum 768 px
					        $config['file_name'] = $nmfile; //nama yang terupload nantinya		
					$this->upload->initialize($config);
					        if($_FILES['filefoto']['name'])
			        		{
				            if ($this->upload->do_upload('filefoto'))
				            {
			                $gbr = $this->upload->data();
			                                $config2 = array(
										   'source_image' => $gbr['full_path'],
										   'new_image' => 'upload/company',
										   'maintain_ratio' => true,
										   'quality' =>100,
										   'height' => 200,
										   'width' => 200
										  );
										  $this->load->library('image_lib', $config2);
										  $this->image_lib->resize();

										 delete_files($gbr['file_path']);
			                $datainsert = array(
				                	'nama' => $nama,
				                	'url' => $url,
								   	'gambar' =>$gbr['file_name']
								   );
			 
			               $this->db->insert('company',$datainsert); //akses model untuk menyimpan ke database
			                //pesan yang muncul jika berhasil diupload pada session flashdata
							redirect('/adm_company','refresh');
							
			            }else{
			                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
			               $error = array('error' => $this->upload->display_errors());
						   echo "<script>";
						   window.alert('upload error');
						     echo "</script>";
			            	}
						}else{
						echo "eror";
					}
	
}

function hapus($id){
	$this->db->where('id_company',$id);
	$res = $this->db->delete('company');
	if ($res>=1) {
		redirect('/adm_company');
	}else{
		echo 'hapus gagal';
	}

}

}
?>