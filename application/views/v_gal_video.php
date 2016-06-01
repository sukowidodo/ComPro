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
               <h2>Videos</h2>
            </div>
            <?php foreach ($video as $video) {
              echo '
              <div class="col-lg-4" style="margin-bottom:20px">
              <iframe width="300" height="169" src="https://www.youtube.com/embed/'.$video->id_youtube.'?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>
              ';
            }?>
           
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