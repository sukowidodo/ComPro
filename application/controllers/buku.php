<?php
class Buku extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->model('m_buku');				
	}
//index for showing the login form
	function index($offset=0) {
	//$this->load->model('admin/m_buku');
	//$result = $this->db->get('buku');


 		$jml = $this->db->get('buku');   

	   $config['base_url'] = base_url().'buku/index';
	   $config['total_rows'] = $jml->num_rows();
	   $config['per_page'] = 6; /*Jumlah data yang dipanggil perhalaman*/
	   $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/

	   /*Class bootstrap pagination yang digunakan*/

	   $config['full_tag_open'] = "<ul class='pagination pagination-lg'>";
	   $config['full_tag_close'] ="</ul>";
	   $config['num_tag_open'] = '<li>';
	   $config['num_tag_close'] = '</li>';
	   $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	   $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	   $config['next_tag_open'] = "<li>";

	   $config['next_link'] = 'selanjutnya >>';

	   $config['prev_link'] = '<< sebelumnya';

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
	   $data['buku'] = $this->m_buku->view($config['per_page'], $offset);
	   $this->load->view('v_buku',$data);



	//$data['buku'] = $result->result();
	//$this->load->view('v_buku',$data);
	}

	function detail($id){
	$result1 = $this->db->query("select * from buku where slug = '$id'")->result();
	foreach ($result1 as $value) {
		$idx = $value->id_buku;
	}
	$data['buku'] = $result1;
	$res2 = $this->m_buku->seo($idx);
	$data['seo'] = $res2;
	$this->load->view('v_bukudetail',$data);	
	}

}
?>