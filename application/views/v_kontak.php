<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head');?>

<body class="homepage">
<?php include_once("analyticstracking.php"); ?>
     <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php //$this->load->view('v_slider');?>
    <!--/#main-slider-->

     <section id="contact-info">
        <div class="center">                
            <h2><i class="fa fa-phone-square"></i> Hubungi Tim Kami</h2>
            <p class="lead"></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.575924832417!2d112.72915681476027!3d-7.288994494739067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb93b0090163%3A0x30f78c8892593c71!2sBest+Investment+Choice!5e0!3m2!1sid!2sid!4v1456967768833" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                <h5>Head Office:</h5>
                                    <p>Telp. (031) 700 39 300</p>
									<p>HP 081330318000</p>
									<p>Website : http://www.juliantoekaputra.com</p>
									<p>Landmark Modern Shop House A-17</p>
									<p>Jln. Indragiri 12-18 Surabaya</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Branch Office:</h5>
                                    <p>Telp. (031) 700 39 300</p>
									<p>HP 081330318000</p>
									<p>Website : http://www.juliantoekaputra.com</p>
									<p>Rukan Puri Mutiara BF 15 - 16</p>
									<p>Jl. Griya Utama Sunter, Jakarta Utara</p>
                                </address>

                   			</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2><i class="fa fa-envelope"></i> Tambahkan Pesan</h2>
                <p class="lead"></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>assets/corlate/sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Kirim</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


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