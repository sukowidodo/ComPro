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
                <div class="center">
                <h2>BUKU - BUKU INSPIRATIF</h2>
                <p class="lead"></p>
                </div>
                <div class="col-lg-12">
                <?php foreach ($buku as $row) {
                    $desc = substr($row->desc_buku,0,180);
                    ?>                       
                            <div class="col-lg-6" style="margin-bottom:15px;">
                                <div class="col-lg-4" style="padding-top:10px;">
                                    <img id="buku" src="<?php echo base_url();?>upload/buku/<?php echo $row->gambar;?>" class="img img-responsive">
                                </div>
                                <div class="col-lg-8" style="padding-bottom:20px;min-height:300px;">
                                    <div class="title"><h2><?php echo $row->judul_buku;?></h2></div>
                                    <div class="clear" style="width:10%;height:2px;background-color:#c52d2f;"></div>
                                    <div class="rate" style="color:#FF9900"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>
                                    <div class="caption"><b>Description :</b><br><?php echo $desc;?>... <a href="<?php echo base_url();?>buku/detail/<?php echo $row->slug;?>"> [detail]</a></div>
                                </div>
                            </div>
                            
                            <?php } ?>

                </div>
                        <center>
                       <?php echo $halaman; ?>
                        </center>
            </div><!-- row-->
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