<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php foreach ($seo as $list2) {?>
    <meta name="description" content="<?php echo $list2->meta_description;?>">
    <meta name="keyword" content="<?php echo $list2->meta_keyword;?>"><?php }?>
     <?php foreach ($buku as $list1) {?>
    <title><?php echo $list1->judul_buku;}?> | <?php echo $this->uri->segment(1);?> | Julianto Eka Putra</title>
    
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
                <?php foreach ($buku as $row) {?>                      
                            <div class="col-lg-12" style="margin-bottom:15px;">
                                <div class="col-lg-6" style="padding-top:10px;padding-left:10%">
                                    <img style="" src="<?php echo base_url();?>upload/buku/<?php echo $row->gambar;?>" class="img img-responsive">
                                </div>
                                <div class="col-lg-6" style="padding-bottom:20px;">
                                    <div class="title"><h1 style="color:#4E4E4E"><?php echo $row->judul_buku;?></h1></div>
                                    <div class="clear" style="width:10%;height:2px;background-color:#c52d2f;"></div>
                                    <div class="rate" style="color:#FF9900"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div>                         
                                    <div class="caption"><b>Description :</b><br><?php echo $row->desc_buku;?></div>
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
                                          <?php echo anchor_popup('http://www.facebook.com/share.php?u='.base_url().'buku/detail/'.$row->slug, '<i class="fa fa-facebook"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('http://twitter.com/intent/tweet?url='.base_url().'buku/detail/'.$row->slug.'&amp;text='.$row->judul_buku.'@juliantoekaputra&amp;hashtags=juliantoekaputra','<i class="fa fa-twitter"></i>', $atts);?>  
                                        </li>
                                        <li>
                                          <?php echo anchor_popup('https://plus.google.com/share?url='.base_url().'buku/detail/'.$row->slug, '<i class="fa fa-google-plus"></i>', $atts);?>  
                                        </li>
                                </ul>                                
                                </div>
                            </div>
                            <?php } ?>
                            
                </div>
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