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
                 <div class="center wow fadeInDown">
                <h2>FAQ</h2>
                
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                 <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <?php 
                          $i = 1;
                          foreach ($faq as $row){ 
                            $no = $i++;
                            ?>
                          <div class="panel panel-default">
                            <div id="panel<?php echo $no;?>" class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $no;?>">
                                  <?php echo $no.". ".$row->question;?>
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapse<?php echo $no;?>" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <!--<div class="media accordion-inner">-->
                                        <div class="media-body">
                                             <p><?php echo $row->answer;?></p>
                                        </div>
                                  <!--</div>-->
                              </div>
                            </div>
                          </div>
                          <?php }?>
                        </div><!--/#accordion1-->
                        </div><!-- end col-6-lg-->
                        <div class="col-lg-2">
                        </div>
            </div><!--/.get-started-->
        </div><!--/.container-->
    </section><!--/#feature-->

<script>
        $(document).ready(function(){
            $("#panel1").addClass("active");
          });
       
        
  </script>';
  
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