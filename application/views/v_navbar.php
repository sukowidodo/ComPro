<?php 
      $segmen = $this->uri->segment(1);
    
    if($segmen=="home" or $segmen=="" ){

        echo'<script>
        $(document).ready(function(){
            $("#home").addClass("active");
          });
        </script>';
      }elseif ($segmen=="about") {
        echo'<script>
        $(document).ready(function(){
            $("#about").addClass("active");
          });
        </script>';
      }elseif ($segmen=="buku") {
         echo'<script>
        $(document).ready(function(){
            $("#buku").addClass("active");
          });
        </script>';
      }elseif ($segmen=="galeri") {
         echo'<script>
        $(document).ready(function(){
            $("#galeri").addClass("active");
          });
        </script>';
      }elseif ($segmen=="blogs") {
         echo'<script>
        $(document).ready(function(){
            $("#blogs").addClass("active");
          });
        </script>';
      }
      elseif ($segmen=="kontak") {
         echo'<script>
        $(document).ready(function(){
            $("#kontak").addClass("active");
          });
        </script>';
      }
      ?>

<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/corlate/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li id="home"><a href="<?php echo base_url();?>">Home</a></li>
                        <li id="about"><a href="<?php echo base_url();?>about">Tentang</a></li>
                        <li id="buku"><a href="<?php echo base_url();?>buku">Buku</a></li>
                        <li id="galeri" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url();?>galeri" class="dropdown">Galeri <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>galeri/images">Images</a></li>
                                <li><a href="<?php echo base_url();?>galeri/video">Video</a></li>
                            </ul>
                        </li>
                        <li id="blogs"><a href="<?php echo base_url();?>blogs">Blogs</a></li>
                        <li id="kontak"><a href="<?php echo base_url();?>kontak">Kontak</a></li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>-->                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->