<?php
class Adm_Galeri extends CI_Controller {
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
 		$data['galeri'] = $this->db->get("album")->result();
		$this->load->view('admin/v_galeri',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	
	
}

public function detail($id){
	if($this->session->userdata['sesi']['username'])
 		{
 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','judul','required');
 		$data['album'] = $this->db->query("select * from album where id_album = '$id'")->result();
 		$data['detail'] = $this->db->query("select * from galeri where id_album = '$id'")->result();
		$this->load->view('admin/v_galeridetail',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	
	
}

function tambah(){	
		
				$judul = $_POST['judul'];
				$this->load->library('upload');
					        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
					        $config['upload_path'] = 'upload/galeri'; //path folder
					        $upload_path = $config['upload_path'];
					        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
					        $config['max_size'] = '2048'; //maksimum besar file 2M
					        $config['max_width']  = '1288'; //lebar maksimum 1288 px
					        $config['max_height']  = '768'; //tinggi maksimu 768 px
					        $config['file_name'] = $nmfile; //nama yang terupload nantinya		
					$this->upload->initialize($config);
					        if($_FILES['filefoto']['name'])
			        		{
				            if ($this->upload->do_upload('filefoto'))
				            {
			                $gbr = $this->upload->data();
			                                $config2 = array(
										   'source_image' => $gbr['full_path'],
										   'new_image' => 'upload/galeri/thumb',
										   'maintain_ratio' => true,
										   'quality' =>100,
										   'height' => 220,
										   'width' => 290
										  );
										  $this->load->library('image_lib', $config2);
										  $this->image_lib->resize();
			                $datainsert = array(
				                	'nama_album' => $judul,
								   	'sampul' =>$gbr['file_name']
								   );
			 
			               $this->db->insert('album',$datainsert); //akses model untuk menyimpan ke database
			                //pesan yang muncul jika berhasil diupload pada session flashdata
							redirect('/adm_galeri','refresh');
							
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

	function tambah2(){
				$id_album = $_POST['id_album'];
				$judul = $_POST['judul'];
				$this->load->library('upload');
					        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
					        $config['upload_path'] = 'upload/galeri'; //path folder
					        $upload_path = $config['upload_path'];
					        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
					        $config['max_size'] = '2048'; //maksimum besar file 2M
					        $config['max_width']  = '1288'; //lebar maksimum 1288 px
					        $config['max_height']  = '768'; //tinggi maksimu 768 px
					        $config['file_name'] = $nmfile; //nama yang terupload nantinya		
					$this->upload->initialize($config);
					        if($_FILES['filefoto']['name'])
			        		{
				            if ($this->upload->do_upload('filefoto'))
				            {
			                $gbr = $this->upload->data();
			                                $config2 = array(
										   'source_image' => $gbr['full_path'],
										   'new_image' => 'upload/galeri/thumb',
										   'maintain_ratio' => true,
										   'width' => 290,
										   'height' => 220
										  );
										  $this->load->library('image_lib', $config2);
										  $this->image_lib->resize();
			                $datainsert = array(
				                	'judul' => $judul,
				                	'id_album' => $id_album,
								   	'gambar' =>$gbr['file_name']
								   );
			 
			               $this->db->insert('galeri',$datainsert); //akses model untuk menyimpan ke database
			                //pesan yang muncul jika berhasil diupload pada session flashdata
							redirect('/adm_galeri/detail/'.$id_album.'','refresh');
							
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

	public function hapus($id){
	$this->db->where('id_album',$id);
	$res = $this->db->delete('album');
	if($res>=1){
		redirect('/adm_galeri');
	}else{
		echo 'error';
	}
	}
}
?>