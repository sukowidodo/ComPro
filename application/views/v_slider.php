    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php $i = 1;
                foreach ($slider as $row ) {
                $id = $i++;?>
                <div id="slider<?php echo $id;?>" class="item" style="background-image: url(<?php echo base_url();?>assets/corlate/images/slider/bg<?php echo $id;?>.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?php echo $row->judul;?></h1>
                                    <h2 class="animation animated-item-2"><?php echo $row->headline;?></h2>
                                    <a class="btn-slide animation animated-item-3" href="<?php echo base_url();?>blogs/s/<?php echo $row->slug;?>">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url();?>assets/corlate/images/slider/img<?php echo $id;?>.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <?php } ?>
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#slider1").addClass("active");
          });
        
</script>