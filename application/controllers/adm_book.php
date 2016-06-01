<?php
class Adm_book extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('admin/m_book');				
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
	public function index($offset=0){
		if($this->session->userdata['sesi']['username'])
	 		{
	 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
	 		$jml = $this->db->get('buku');   
		   $config['base_url'] = base_url().'adm_book/index';
		   $config['total_rows'] = $jml->num_rows();
		   $config['per_page'] = 4; /*Jumlah data yang dipanggil perhalaman*/
		   $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/
		   
		   /*Class bootstrap pagination yang digunakan*/
		   $config['full_tag_open'] = "<ul class='pagination'>";
		   $config['full_tag_close'] ="</ul>";
		   $config['num_tag_open'] = '<li>';
		   $config['num_tag_close'] = '</li>';
		   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		   $config['next_tag_open'] = "<li>";
		   $config['next_link'] = '>';
		   $config['prev_link'] = '<';
		   $config['first_link'] = '>>';
		   $config['last_link'] = '<<';
		   $config['next_tagl_close'] = "</li>";
		   $config['prev_tag_open'] = "<li>";
		   $config['prev_tagl_close'] = "</li>";
		   $config['first_tag_open'] = "<li>";
		   $config['first_tagl_close'] = "</li>";
		   $config['last_tag_open'] = "<li>";
	       $config['last_tagl_close'] = "</li>";
		   $this->pagination->initialize($config);  

		   $data['halaman'] = $this->pagination->create_links();

		   /*membuat variable halaman untuk dipanggil di view nantinya*/

		   $data['offset'] = $offset;
			$data['total'] = $jml->num_rows();
			//$data['kategori'] = $this->m_home->kategori();
		   $data['buku'] = $this->m_book->listbuku($config['per_page'], $offset);
		   $this->load->view('admin/v_book',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	   			
		
	}
	public function tambah(){
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
			$penerbit = $_POST['penerbit'];
		    $this->load->library('upload');
			        $nmfile = "buku_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
			        $config['upload_path'] = 'upload/buku'; //path folder
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
					
	                $datainsert = array(
		                	 'judul_buku' =>$judul,
			   				'desc_buku' =>$deskripsi,
			   				'penerbit' =>$penerbit,
						   'gambar' =>$gbr['file_name']
						   );
	 
	               $this->db->insert('buku',$datainsert); //akses model untuk menyimpan ke database
	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                
					redirect('/adm_book','refresh');
					
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	               $error = array('error' => $this->upload->display_errors());
				   echo "<script>";
				   window.alert('$error');
				     echo "</script>";
	            	}
			}else{
				$datainsert = array(
		                	'judul_buku' =>$judul,
			   				'desc_buku' =>$deskripsi,
			   				'penerbit' =>$penerbit
						   );
	 
	               $this->db->insert('buku',$datainsert);
	               redirect('/adm_book','refresh');
			}
	}

	public function hapus($id){
		$this->db->where('id_buku',$id);
		$res = $this->db->delete('buku');
		if ($res>=1) {
			redirect('/adm_book');
		}else{
			echo 'error';
		}

	}

	public function dataedit($id,$offset=0){
		if($this->session->userdata['sesi']['username'])
	 		{
	 			$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
	 		$jml = $this->db->get('buku');   
		   $config['base_url'] = base_url().'adm_book/index';
		   $config['total_rows'] = $jml->num_rows();
		   $config['per_page'] = 4; /*Jumlah data yang dipanggil perhalaman*/
		   $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/
		   
		   /*Class bootstrap pagination yang digunakan*/
		   $config['full_tag_open'] = "<ul class='pagination'>";
		   $config['full_tag_close'] ="</ul>";
		   $config['num_tag_open'] = '<li>';
		   $config['num_tag_close'] = '</li>';
		   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		   $config['next_tag_open'] = "<li>";
		   $config['next_link'] = '>';
		   $config['prev_link'] = '<';
		   $config['first_link'] = '>>';
		   $config['last_link'] = '<<';
		   $config['next_tagl_close'] = "</li>";
		   $config['prev_tag_open'] = "<li>";
		   $config['prev_tagl_close'] = "</li>";
		   $config['first_tag_open'] = "<li>";
		   $config['first_tagl_close'] = "</li>";
		   $config['last_tag_open'] = "<li>";
	       $config['last_tagl_close'] = "</li>";
		   $this->pagination->initialize($config);  

		   $data['halaman'] = $this->pagination->create_links();

		   /*membuat variable halaman untuk dipanggil di view nantinya*/

		   $data['offset'] = $offset;
			$data['total'] = $jml->num_rows();
			//$data['kategori'] = $this->m_home->kategori();
		   $data['buku'] = $this->m_book->listbuku($config['per_page'], $offset);
		   $result = $this->m_book->dataedit($id);
		   foreach ($result as $row) {
		   	$data['e_id'] = $row->id_buku;
		   	$data['e_judul'] = $row->judul_buku;
		   	$data['e_isi'] = $row->desc_buku;
		   	$data['e_penerbit'] = $row->penerbit;
		   	$data['e_gambar'] = $row->gambar;
		   }
		   $this->load->view('admin/v_book',$data);
 		}else{
 		redirect('index.php/login','refresh');
 		}	   			
		
	}

	public function update(){
			$id_buku = $_POST['id_buku'];
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
			$penerbit = $_POST['penerbit'];
		    $this->load->library('upload');
			        $nmfile = "buku_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
			        $config['upload_path'] = 'upload/buku'; //path folder
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
					
	                $datainsert = array(
		                	 'judul_buku' =>$judul,
			   				'desc_buku' =>$deskripsi,
			   				'penerbit' =>$penerbit,
						   'gambar' =>$gbr['file_name']
						   );
	 				$this->db->where('id_buku',$id_buku);
	               $this->db->update('buku',$datainsert); //akses model untuk menyimpan ke database
	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                
					redirect('/adm_book/dataedit/'.$id_buku,'refresh');
					
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	               $error = array('error' => $this->upload->display_errors());
				   echo "<script>";
				   window.alert('$error');
				     echo "</script>";
	            	}
			}else{
				$datainsert = array(
		                	'judul_buku' =>$judul,
			   				'desc_buku' =>$deskripsi,
			   				'penerbit' =>$penerbit
						   );
	 
	              $this->db->where('id_buku',$id_buku);
	               $this->db->update('buku',$datainsert);
	               redirect('/adm_book/dataedit/'.$id_buku,'refresh');
			}
	}

}
?>