<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('v_head');?>
<body class="homepage">
<?php $this->load->view('analyticstracking');?>

    <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php // $this->load->view('v_slider');?>
    <!--/#main-slider-->

    <section id="content" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url();?>assets/corlate/images/slider/img1.png" class="img-responsive">
                </div>
                <div class="col-md-8">
                <?php foreach ($res as $row) {

                echo '<h1 style="color:#C52D2F;">'.$row->judul.'</h1>';
                echo $row->isi;
                $atts = array(
                                  'width'      => '600',
                                  'height'     => '400',
                                  'scrollbars' => 'yes',
                                  'status'     => 'yes',
                                  'resizable'  => 'yes',
                                  'screenx'    => '400',
                                  'screeny'    => '100'
                                );?>
                                <ul class="social_icons">
                                        <li><strong>Share :</strong></li>
                                        <li>
                                          <?php echo anchor_popup('http://www.facebook.com/share.php?u='.base_url().'about', '<i class="fa fa-facebook"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('http://twitter.com/intent/tweet?url='.base_url().'about/&amp;text='.$row->judul.'@juliantoekaputra&amp;hashtags=juliantoekaputra>','<i class="fa fa-twitter"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('https://plus.google.com/share?url='.base_url().'about', '<i class="fa fa-google-plus"></i>', $atts);?>  
                                        </li>
                                </ul>
                 <?php }  ?>
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