<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		
			<li id="index"><a href="<?php echo base_url();?>adm_index"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li id="buku"><a href="<?php echo base_url();?>adm_book"><i class="fa fa-book" style="margin-right:15px"></i></svg> Book</a></li>
			<li id="galeri"><a href="<?php echo base_url();?>adm_galeri"><svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Galeri</a></li>
			<li id="video"><a href="<?php echo base_url();?>adm_video"><svg class="glyph stroked video"><use xlink:href="#stroked-video"/></svg> Video</a></li>
			<li id="faq"><a href="<?php echo base_url();?>adm_faq"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Faq</a></li>
			<li id="testi"><a href="<?php echo base_url();?>adm_testimonial"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Testimonial</a></li>
			<li id="menu"><a href="<?php echo base_url();?>adm_menu"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Menus</a></li>
			
			<li class="parent">
				<a href="#">
					<svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widget <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo base_url();?>adm_slider">
							<svg class="glyph stroked landscape"><use xlink:href="#stroked-landscape"/></svg> Slider
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url();?>adm_quote">
							<svg class="glyph stroked empty message"><use xlink:href="#stroked-empty-message"/></svg> Quote of The Day
						</a>
					</li>
          <li>
            <a class="" href="<?php echo base_url();?>adm_company">
              <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Our Company
            </a>
          </li>
				</ul>
			</li>
			<li role="presentation" class="divider">
		</ul>

	</div><!--/.sidebar-->
	<?php
	 $segmen = $this->uri->segment(1);
    if($segmen=="adm_index" or $segmen=="login"){
        echo'<script>
        $(document).ready(function(){
            $("#index").addClass("active");
          });
        </script>';
      }elseif($segmen=="adm_book"){
      	echo'<script>
        $(document).ready(function(){
            $("#buku").addClass("active");
          });
        </script>';
      }elseif($segmen=="adm_galeri"){
      	echo'<script>
        $(document).ready(function(){
            $("#galeri").addClass("active");
          });
        </script>';
      }
      elseif($segmen=="adm_video"){
      	echo'<script>
        $(document).ready(function(){
            $("#video").addClass("active");
          });
        </script>';
      }
      elseif($segmen=="adm_testimonial"){
      	echo'<script>
        $(document).ready(function(){
            $("#testi").addClass("active");
          });
        </script>';
    }
      elseif($segmen=="adm_faq"){
      	echo'<script>
        $(document).ready(function(){
            $("#faq").addClass("active");
          });
        </script>';
      }elseif($segmen=="adm_menu"){
        echo'<script>
        $(document).ready(function(){
            $("#menu").addClass("active");
          });
        </script>';
      }
      ?>