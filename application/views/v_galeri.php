<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head');?>

<body class="homepage">

    <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php $this->load->view('v_slider');?>
    <!--/#main-slider-->

    <section id="content" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url();?>assets/corlate/images/slider/img1.png" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <h2><a href="#">Siapa sih Julianto Eka Putra???</a></h2>
                    <h3>
                    Terlahir dari pasangan Tonny Singgih Utama dan Yenny Sindawati, sulung dari 3 bersaudara ini melewati masa kecil dengan biasa-biasa saja, sama nakalnya seperti anak-anak lainnya. Ada satu hal yang berbeda dan menarik dari kisah masa kecilnya yang dimulai sejak kelas 4 SD, tanpa disadari Julianto kecil sudah mulai memupuk jiwa wirausahanya.</h3>
                    <h3>
                    “Entah kenapa saat melihat teman-teman banyak yang main kelereng di sekolah, saya tertarik untuk bisa mencari tahu di mana kelereng itu bisa dibeli dan menjualnya kepada teman-teman” kenangnya kala itu. Dengan bertanya ke toko kelontong dekat rumah, Julianto segera mencari tempat di mana bisa membeli kelereng dengan murah. Alhasil, ia pun bisa mendapat keuntungan Rp 5,- dari setiap menjual 4 butir kelereng di sekolahnya.
                    </h3>
                    <h3><a href="<?php echo base_url();?>about#work" class="btn btn-primary readmore">READ MORE</a></h3>
                </div>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->


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