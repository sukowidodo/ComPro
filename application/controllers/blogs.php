<?php
class Blogs extends CI_Controller {
//constructor
	function __construct() {
	parent::__construct();
	$this->load->helper('url');	
	$this->load->model('m_blogs');				
	}

	
//index for showing the login form
	function index($offset=0) {
		$res11 = $this->m_blogs->kategori();
		$data['kategori'] = $res11;
		$jml = $this->db->get('artikel');   
		   $config['base_url'] = base_url().'blogs/index';
		   $config['total_rows'] = $jml->num_rows();
		   $config['per_page'] = 3; /*Jumlah data yang dipanggil perhalaman*/
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
		   $data['blogs'] = $this->m_blogs->view($config['per_page'], $offset);
		   $this->load->view('v_blogs',$data);

	
	}

	function artikel($id){  
	$res = $this->m_blogs->baca($id);
	$res1 = $this->m_blogs->kategori();
	$data['list'] = $res;
	$data['kategori'] = $res1;
	foreach ($res as $value) {
		$idx = $value->id_artikel;
	}
	$res2 = $this->m_blogs->seo($idx);
	$data['seo'] = $res2;
	$this->load->view('v_artikel',$data);
	}

	function slider ($id){
		$res = $this->m_blogs->slider($id);
		$data['list'] = $res;
		$res1 = $this->m_blogs->kategori();
		$data['kategori'] = $res1;
		$this->load->view('v_aslider',$data);
	}

	function kategori($id,$offset=0){
	$data['kategori'] = $this->m_blogs->kategori();
	$data['label'] = $this->db->query("select * from kategori where id_kategori = '$id'")->result();
	//$this->load->view('v_blogs',$data);
		$this->db->where('slug', $id);
		$jml = $this->db->get('artikel');   

	   $config['base_url'] = base_url().'blogs/index';
	   $config['total_rows'] = $jml->num_rows();
	   $config['per_page'] = 3; /*Jumlah data yang dipanggil perhalaman*/
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
	   $data['blogs'] = $this->m_blogs->kategori2($config['per_page'], $offset,$id);
	   $this->load->view('v_blogskategori',$data);
	}
}
?>