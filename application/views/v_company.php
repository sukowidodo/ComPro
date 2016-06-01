
 <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Binar Group</h2>
                <p class="lead">Binar Group adalah perusahaan Group berskala Nasional, mempunyai 20 Divisi yang saat ini sedang berkembang.</p>
            </div>    
                <style type="text/css">
			.img-responsive{
				
			}
			.col-xs-3{
				height: 150px
				text-align: center;
				padding: 40px;
			}

			</style>
						<div id="about-slider">
							<div id="carousel-slider" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
							  	<ol class="carousel-indicators visible-xs">
								    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-slider" data-slide-to="1"></li>
								    <li data-target="#carousel-slider" data-slide-to="2"></li>
							  	</ol>

								<div class="carousel-inner">
								<?php 
								$i=0;
								$n = 0;
								
								echo '<div class="item active">';
								foreach ($company as $row) {
										echo '<div class="col-xs-3" ><a href="'.$row->url.'" target="_blank"><img src="'.base_url().'upload/company/'.$row->gambar.'" class="img-responsive" alt=""></a> </div>';
										 $i++;
											 if ($i%4==0 && $i<$total) {
											 	echo "</div><div class='item'>";
											 }
										} 
								echo '</div>';
								?>
								
								<!--<div class="item active">
										<div class="col-xs-3" ><a href=""><img src="<?php //echo base_url();?>logo/logo (1).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://micpublishing.co.id"><img src="<?php //echo base_url();?>logo/logo (2).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://mictransformer.com"><img src="<?php //echo base_url();?>logo/logo (3).png" class="img-responsive" alt=""> </a></div>
										<div class="col-xs-3" ><a href=""><img src="<?php //echo base_url();?>logo/logo (4).png" class="img-responsive" alt=""></a> </div>
								   </div>
								  <div class="item">
										<div class="col-xs-3" ><a href=""><img src="<?php// echo base_url();?>logo/logo (5).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://transformercenter.com"><img src="<?php //echo base_url();?>logo/logo (6).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://www.hore-indonesia.com/"><img src="<?php //echo base_url();?>logo/logo (7).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://kampoengkidz.com"><img src="<?php //echo base_url();?>logo/logo (8).png" class="img-responsive" alt=""></a> </div>
								   </div> 
								   <div class="item">
										<div class="col-xs-3" ><a target="_blank" href="http://www.bridgeindonesia.com/"><img src="<?php //echo base_url();?>logo/logo (9).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://www.selamatpagiindonesia.org/"><img src="<?php //echo base_url();?>logo/logo (10).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a target="_blank" href="http://illustratie.biz/"><img src="<?php //echo base_url();?>logo/logo (11).png" class="img-responsive" alt=""></a> </div>
										<div class="col-xs-3" ><a href=""><img src="<?php//echo base_url();?>logo/logo (12).png" class="img-responsive" alt=""></a> </div>
								   </div> 
								  <!-- <div class="item">
										<div class="col-xs-3"><img src="<?php //echo base_url();?>assets/corlate/images/slider_one.jpg" class="img-responsive" alt=""> </div>
										<div class="col-xs-3"><img src="<?php //echo base_url();?>assets/corlate/images/slider_one.jpg" class="img-responsive" alt=""> </div>
										<div class="col-xs-3"><img src="<?php //echo base_url();?>assets/corlate/images/slider_one.jpg" class="img-responsive" alt=""> </div>
										<div class="col-xs-3"><img src="<?php //echo base_url();?>assets/corlate/images/slider_one.jpg" class="img-responsive" alt=""> </div>
								   </div>--> 
								</div>
								
								<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
									<i class="fa fa-angle-left"></i> 
								</a>
								
								<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
									<i class="fa fa-angle-right"></i> 
								</a>
							</div> <!--/#carousel-slider-->
						</div><!--/#about-slider-->
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->



			
		