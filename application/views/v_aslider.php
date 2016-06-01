<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($list as $list1) {?>
    <meta name="description" content="julianto, julianto eka, julianto eka putra, binar group">
    <meta name="keyword" content="julianto, julianto eka, julianto eka putra, binar group">
    <meta name="author" content="admin">
    <title><?php echo $list1->judul;}?> | <?php echo $this->uri->segment(1);?> | Julianto Eka Putra</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url();?>assets/corlate/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/corlate/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/corlate/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/corlate/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/corlate/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/corlate/css/responsive.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/corlate/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/corlate/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/corlate/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/corlate/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/corlate/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
<?php $this->load->view('analyticstracking');?>

    <!-- header -->
<?php $this->load->view('v_header');?>
    <!-- header-->
<!-- section slider-->
<?php //$this->load->view('v_slider');?>
    <!--/#main-slider-->

     <section id="blog" class="container">
        <!--<div class="center">
            <h2>Blogs</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>-->

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                 
                 <?php foreach ($list as $row) {?>
                 <?php if ($row->image=="") {
                     $gambar="assets/corlate/images/blog/blog1.jpg";
                 }else{
                    $gambar="upload/slider/".$row->image;
                 }?>


                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url().''.$gambar;?>" width="100%" alt="" /></a>
                                <h2><a href="blog-item.html"><?php echo $row->judul;?></a></h2>
                                <h3><?php echo $row->isi;?></h3>
                                 <?php $atts = array(
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
                                          <?php echo anchor_popup('http://www.facebook.com/share.php?u='.base_url().'blogs/'.$this->uri->segment(2).'/'.$this->uri->segment(3), '<i class="fa fa-facebook"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('http://twitter.com/intent/tweet?url='.base_url().'blogs/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'&amp;text='.$row->judul.'@juliantoekaputra&amp;hashtags=juliantoekaputra','<i class="fa fa-twitter"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('https://plus.google.com/share?url='.base_url().'blogs/'.$this->uri->segment(2).'/'.$this->uri->segment(3), '<i class="fa fa-google-plus"></i>', $atts);?>  
                                        </li>
                                </ul>
                                <div class="post-tags">
                                        <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
                                    </div>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        <?php } ?>
                </div><!--/.col-md-8-->
                <!-- sidebar-->
                <?php $this->load->view('v_sidebar');?>
                <!--sidebar-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->


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