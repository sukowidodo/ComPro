<?php
class Adm_Testimonial extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->helper('file');
$this->load->model('admin/m_testimonial');				
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
 		$data['testi'] = $this->db->get("testimonial")->result();
		$this->load->view('admin/v_testimonial',$data);
		}
		}

public function hapus($id){
	$this->db->where('id_testi', $id); 
	$res = $this->db->delete('testimonial');
	if($res>=1){
		redirect('/adm_testimonial');
	}else{
		echo 'gagal hapus';
	}
}

public function tambah(){
	$nama = $_POST['nama'];
	$posisi = $_POST['posisi'];
	$perusahaan = $_POST['perusahaan'];
	$testimonial = $_POST['testimonial'];

$this->load->library('upload');
		        $nmfile = "buku_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = 'upload/temp'; //path folder
		        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		        $config['max_size'] = '2048'; //maksimum besar file 2M
		        $config['max_width']  = '1288'; //lebar maksimum 1288 px
		        $config['max_height']  = '1000'; //tinggi maksimu 768 px
		        $config['file_name'] = $nmfile; //nama yang terupload nantinya		
		$this->upload->initialize($config);
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $config2 = array(
							   'source_image' => $gbr['full_path'],
							   'new_image' => 'upload/testim',
							   'maintain_ratio' => true,
							   'width' => 66,
							   'height' => 66
							  );
							  $this->load->library('image_lib', $config2);
							  $this->image_lib->resize();

				delete_files($gbr['full_path'], TRUE);			  
				
                $datainsert = array(
	                	'nama' =>$nama,
		   				'posisi' =>$posisi,
		   				'perusahaan' =>$perusahaan,
		   				'testi' =>$testimonial,
					   	'gambar' =>$gbr['file_name']
					   );
 
               $this->db->insert('testimonial',$datainsert); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
               delete_files($gbr['file_path']);
				redirect('/adm_testimonial','refresh');
				
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $error = array('error' => $this->upload->display_errors());
			   echo "<script>";
			   window.alert('$error');
			     echo "</script>";
            	}
		}else{
			$datainsert = array(
	                	 'nama' =>$nama,
		   				'posisi' =>$posisi,
		   				'perusahaan' =>$perusahaan,
		   				'testi' =>$testimonial,
					   'gambar' =>$gbr['file_name']
					   );
 
               $this->db->insert('testimonial',$datainsert);
               redirect('/adm_testimonial','refresh');
		}

	}

}
?>