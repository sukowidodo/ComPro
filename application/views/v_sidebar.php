<aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->                    
                    <div class="widget archieve">
                        <h3>Kategori</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                <?php foreach ($kategori as $kat) {
                                    echo '<li><a href="'.base_url().'blogs/kategori/'.$kat->id_kategori.'"><i class="fa fa-angle-double-right"></i>'.$kat->nama_kategori.'</a></li>';
                                   }?>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
                    
                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">Leadership</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">bisnis</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">marketing</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">sma spi</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">inspirasi</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">motivasi</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">quote</a></li>
                            
                        </ul>
                    </div><!--/.tags-->
                    
                    <!--<div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                        </ul>
                    </div><!--/.blog_gallery-->
                </aside>  