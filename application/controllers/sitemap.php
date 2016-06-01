<?php class Sitemap extends CI_Controller {
 public function index(){
     $this->load->helper('url');
     $this->load->model('m_sitemap');
     $data['produk'] = $this->m_sitemap->create();
     $data['buku'] = $this->m_sitemap->buku();
     $data['slider'] = $this->m_sitemap->slider();
     $this->load->view('v_sitemap',$data);
 }
}
?>