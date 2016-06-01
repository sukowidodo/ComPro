<?php
class Adm_Index extends CI_Controller {
//constructor
function __construct() {
parent::__construct();
$this->load->helper('url');	
$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('admin/m_home');
} 

public function count_users(){
$query = $this->db->get('users');
return $this->db->count_all_results();
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

				$jml = $this->db->get('artikel');   
			   $config['base_url'] = base_url().'adm_index/index';
			   $config['total_rows'] = $jml->num_rows();
			   $config['per_page'] = 5; /*Jumlah data yang dipanggil perhalaman*/
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
			$data['kategori'] = $this->m_home->kategori();
		   $data['list'] = $this->m_home->listartikel($config['per_page'], $offset);
		   $this->load->view('admin/v_home',$data);
 		}else{
 		redirect('login','refresh');
 		}	   			
}

public function hapus($id){
	$this->db->where('id_artikel',$id);
	$res = $this->db->delete('artikel');
	if($res>=1){
		redirect('/adm_index');
	}else{
		echo "Error";
	}

}

	function doinsert(){
		$id_kategori = $_POST['id_kategori'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$headline = $_POST['headline'];
		$slug = url_title($judul, 'dash', TRUE);
		//$penerbit = $_POST['penerbit'];
		//$date1 = $_POST['date'];
		//$date = date('Y-m-d', strtotime($date1));
		$date = date('Y-m-d');
	    $author = $_POST['author'];
	    $this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = 'upload/artikel'; //path folder
		        $upload_path = $config['upload_path'];
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
							   'new_image' => 'upload/artikel/thumb',
							   'maintain_ratio' => true, 
							   'width' => 600,
							   'height' => 300
							  );
							  $this->load->library('image_lib', $config2);
							  $this->image_lib->resize();
                $datainsert = array(
	                	'id_kategori' => $id_kategori,
	                	 'judul' =>$judul,
	                	 'slug' =>$slug,
		   				'date' =>$date,
		   				'headline' =>$headline,
		   				'author' =>$author,
		   				'isi' =>$isi,
					   'gambar' =>$gbr['file_name']
					   );
 
               $this->db->insert('artikel',$datainsert); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata

				redirect('/adm_index','refresh');
				
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $error = array('error' => $this->upload->display_errors());
			   echo "<script>";
			   window.alert('upload error');
			     echo "</script>";
            	}
		}else{
			$datainsert = array(
	                	'id_kategori' => $id_kategori,
	                	 'judul' =>$judul,
	                	 'slug' =>$slug,
		   				'date' =>$date,
		   				'author' =>$author,
		   				'headline' =>$headline,
		   				'isi' =>$isi
					   );
 
               $this->db->insert('artikel',$datainsert);
               redirect('/adm_index','refresh');
		}
	}


	public function update_data($id){
		$data['count_users'] = $this->count_users();
 			$data['count_artikel'] = $this->count_artikel();
 			$data['count_buku'] = $this->count_buku();
		if ($this->session->userdata['sesi']['username']) {
		$data['kategori'] = $this->db->get('kategori')->result();
		$data['artikel'] = $this->m_home->update_data($id);
		$this->load->view('admin/v_home_update',$data);
		}else
		{
			redirect('login','refresh');
		}
		
	}

	function do_update(){
		$id_artikel = $this->input->post('id_artikel');
		$id_kategori = $this->input->post('id_kategori');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$headline = $this->input->post('headline');
		$date = date('Y-m-d');
	    $author = $this->input->post('author');
		$slug = url_title($judul, 'dash', TRUE);

		$this->load->library('upload');
		        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
		        $config['upload_path'] = 'upload/artikel'; //path folder
		        $upload_path = $config['upload_path'];
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
							   'new_image' => 'upload/artikel/thumb',
							   'maintain_ratio' => true, 
							   'width' => 600,
							   'height' => 300
							  );
							  $this->load->library('image_lib', $config2);
							  $this->image_lib->resize();
                $datainsert = array(
	                	'id_kategori' => $id_kategori,
	                	 'judul' =>$judul,
	                	 'slug' =>$slug,
		   				'date' =>$date,
		   				'headline' =>$headline,
		   				'author' =>$author,
		   				'isi' =>$isi,
					   'gambar' =>$gbr['file_name']
					   );
 				$this->db->where('id_artikel',$id_artikel);
               $this->db->update('artikel',$datainsert); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata

				redirect('/adm_index/update_data/'.$id_artikel,'refresh');
				
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $error = array('error' => $this->upload->display_errors());
			   echo "<script>";
			   window.alert('upload error');
			     echo "</script>";
            	}
		}else{
			$datainsert = array(
	                	'id_kategori' => $id_kategori,
	                	 'judul' =>$judul,
	                	 'slug' =>$slug,
		   				'date' =>$date,
		   				'author' =>$author,
		   				'headline' =>$headline,
		   				'isi' =>$isi
					   );
 				$this->db->where('id_artikel',$id_artikel);
               $this->db->update('artikel',$datainsert);
               redirect('/adm_index/update_data/'.$id_artikel,'refresh');
		}
	}

}
?>