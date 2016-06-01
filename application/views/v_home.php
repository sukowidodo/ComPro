<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head');?>

<body class="homepage">
<?php $this->load->view('analyticstracking');?>
     <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php $this->load->view('v_slider');?>
    <!--/#main-slider-->

    <section id="content" >
        <div class="container">
            <div class="row">
              <div class="center wow fadeInDown">
                <h2>Figur</h2>
                <!--<p class="lead">Siapa yang tidak kenal salah satu tokoh besar yang satu ini yang telah melalang buana di dunia bisnis di Indonesia,<br> berikut ini profil beliau</p>-->
              </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url();?>assets/corlate/images/slider/img1.png" class="img-responsive">
                </div>
                <div class="col-md-8">
                <?PHP foreach ($about as $about) {
                    echo '<h2><a href="'.base_url().'about">'.$about->judul.'</a></h2>';
                    echo $about->headline;
                     }?>
                    <h3><a href="<?php echo base_url();?>about" class="btn btn-primary readmore">READ MORE</a></h3>
                </div>
            </div>
        
        </div><!--/.container-->
       <?php $this->load->view('v_family');?>
       <?php // $this->load->view('v_quote');?>

<!--section team-->
<?php // $this->load->view('v_team');?>
<!--section team-->
    </section><!--/#feature-->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Expertise Areas</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Experience</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Selected Seminar & Training</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="<?php // echo base_url();?>assets/corlate/images/tab2.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <h2>Keahlian</h2>
                                                 <p>
                                                     <ul>
                                                        <li>  Entrepreneurship, memberikan pelatihan di beberapa kota seperti Jakarta, Bandung, Batam, Surabaya,<br />
                                                        Makassar di depan peserta dari puluhan orang sampai ribuan orang</li>
                                                        <li>Salesmanship, memberikan pelatihan untuk meningkatkan sales skill</li>
                                                        <li>Strategic Marketing</li>
                                                        <li>Pengembangan Kepribadian, membangkitkan potensi dalam diri sehingga bisa optimal dalam berkarya<br />
                                                        dan bekerja</li>
                                                        <li>Motivator untuk skala nasional dan internasional</li>
                                                        <li>Konsultan Pengaturan Keuangan dan Investasi<br /></li>
                                                      </ul>
                                                 </p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="<?php //echo base_url();?>assets/corlate/images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <h2>Pengalaman</h2>
                                                 <p>
                                                     <ul>
                                                        <li>  1995 AO Bank BDNI</li>
                                                        <li>1995 – sekarang Pembicara dan trainer</li>
                                                        <li>1995 – 2000 Pengusaha di bidang makanan kesehatan</li>
                                                        <li>2000 – sekarang Presiden komisaris PT. Binar</li>
                                                        <li>2001 – sekarang Founder Yayasan Selamat Pagi Indonesia</li>
                                                        <li>2002 – sekarang Staf Ahli di Universitas Muhammadiyah, Malang</li>
                                                        <li>2007 – sekarang Presiden Komisaris PT. Menuju Insan Cemerlang</li>
                                                        <li>2007 – sekarang Presiden Komisaris PT. Bina Insan Cemerlang</li>
                                                        <li>2007 – sekarang Founder Yayasan Karunia Kesehatan<br />
                                                        </li>
                                                      </ul>
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                           <!--<div class="pull-left">
                                                <img class="img-responsive" src="<?php //echo base_url();?>assets/corlate/images/tab1.png">
                                            </div>-->
                                            <div class="media-body">
                                                 <h2>Selected Seminar & Training</h2>
                                                    <p>
                                                      <ul>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas STIE Trisakti, Jakarta</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Surabaya, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Petra, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Widya Mandala, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di ITS, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Airlangga, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas 17 Agustus, Surabaya</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Muhammadiyah, Malang</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas ABM KUCECWARA, Malang</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Widya Gama, Malang</li>
                                                        <li>Pembicara Seminar Entrepreneurship di Universitas Brawijaya, Malang</li>
                                                      </ul>
                                                    </p>
                                            </div>
                                        </div>
                                     </div> 
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->
                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                        <?php foreach ($testi as $testim) { 
                            if ($testim->gambar=="") {
                                $gambar = base_url().'assets/corlate/images/testimonials1.png';
                            }else{
                                $gambar = base_url().'upload/testim/'.$testim->gambar;
                            }

                            ?>                       
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle testi" src="<?php echo $gambar;?>" style="width:66px;height:66px">
                            </div>
                            <div class="media-body">
                                <p><?php echo $testim->testi;?></p>
                                <span><strong>-<?php echo $testim->nama;?>/</strong> <?php echo $testim->perusahaan;?></span>
                            </div>
                         </div>
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- section company -->
<?php $this->load->view('v_company');?>
<!-- section company -->
<!-- section bottom-->
<?php $this->load->view('v_bottom');?>
<!-- section bottom-->
<!--footer-->
<?php $this->load->view('v_footer');?>
<!--footer-->
    <script src="<?php echo base_url();?>assets/corlate/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/corlate/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/corlate/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/corlate/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url();?>assets/corlate/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/corlate/js/wow.min.js"></script>
</body>
</html>