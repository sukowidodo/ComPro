<?php
class Adm_Slider extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
		$this->load->model('admin/m_home');
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
	 		$data['slider'] = $this->db->get('slider')->result();
			$this->load->view('admin/v_slider',$data);
	 		}else{
	 		redirect('login','refresh');
	 		}	   			
		}

	public function tambah(){
		$judul = $this->input->post('judul');
		$headline = $this->input->post('headline');
		$isi = $this->input->post('isi');

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
					'judul' =>$judul,
					'headline' =>$headline,
					'isi' =>$isi,
					'image' =>$gbr['file_name']
					);

				$res = $this->db->insert('slider',$datainsert);
					if ($res>=1) {
						redirect('/adm_slider');
					}else{
						echo 'insert error';
					}
			}else{
				echo 'upload error';
			}
		}else{
			$datainsert = array(
					'judul' =>$judul,
					'headline' =>$headline,
					'isi' =>$isi
					);

				$res = $this->db->insert('slider',$datainsert);
					if ($res>=1) {
						redirect('/adm_slider');
					}else{
						echo 'insert error';
					}
		}
	}

	public function hapus($id){
		$this->db->where('id_slider',$id);
		$res = $this->db->delete('slider');
		if($res>=1){
			redirect('/adm_slider');
		}else{
			echo "error";
		}

	}
}
?>