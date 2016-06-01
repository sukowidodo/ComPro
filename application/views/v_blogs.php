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
<style type="text/css">
    @media screen and (max-width: 767px) {
        .entry-meta {
            display: none;
        }
}
</style>
     <section id="blog" class="container">
        <div class="center">
            <h2>Blogs</h2>
            <!--<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>-->
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                 <?php foreach ($blogs as $row) {?>
                 <?php $id = $row->id_artikel;?>
                 <?php if ($row->gambar=="") {
                     $gambar="assets/corlate/images/blog/blog1.jpg";
                 }else{
                    $gambar="upload/artikel/thumb/".$row->gambar;
                 }?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo date('d M Y', strtotime($row->date));?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $row->author;?></a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">0 Comments</a></span>
                                    <!--<span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>-->
                                </div>
                            </div>      
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url().''.$gambar;?>" alt="" /></a>
                                <h2><a href="<?php echo base_url();?>blogs/artikel/<?php echo $row->slug;?>"><?php echo $row->judul;?></a></h2>
                                <h3><p><?php echo $row->headline;?>...</p></h3>
                                <a class="btn btn-primary readmore" href="<?php echo base_url();?>blogs/artikel/<?php echo $row->slug;?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        <?php } ?>
                    <div class="col-xs-12 col-sm-10 blog-content">  
                    <center>
                    <?php echo $halaman;?>
                    </center>
                    </div>
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