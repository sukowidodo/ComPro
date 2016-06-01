<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head');?>

<body class="homepage">
<?php $this->load->view('analyticstracking');?>
 <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php //$this->load->view('v_slider');?>
    <!--/#main-slider-->

   <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Gallery</h2>
            </div>
           <!-- <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->
<style type="text/css">
    .portfolio-item:hover{
        object-fit:cover;
    }
</style>
            <div class="row">
            
                <div class="portfolio-items">
                <?php foreach ($galeri as $galeri) {?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="iki" src="<?php echo base_url();?>upload/galeri/thumb/<?php echo $galeri->sampul;?>" width="290" height="220" style="object-fit:cover" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo $galeri->nama_album; ?></a></h3>
                                     
                                    <a class="preview" href="<?php echo base_url();?>upload/galeri/<?php echo $galeri->sampul;?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->


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