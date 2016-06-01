<!DOCTYPE html>
<html>
<?php $this->load->view('admin/v_head');?>
<body>
	<!--header-->
	<?php $this->load->view('admin/v_header');?>
	<!--header-->
	<!--sidebar-->
    <?php $this->load->view('admin/v_sidebar');?>
	<!--sidebar-->
		
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Optimasi</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">Optimasi</div>
						<div class="panel-body">
							<div class="canvas-wrapper">
							<form action="<?php echo $action;?>" enctype="" method="post">
								<div class="form-group">
									<label>Judul</label>
									<?php
									echo '<h3>'.$judul.'</h3>';
									echo'<input style="display:none" class="form-control" type="text" name="id" value="'.$id.'">';
									?>
								</div>
								<div class="form-group">
									<label>Meta Description</label>
									<textarea class="form-control" type="text" name="description" required="required" rows="3"></textarea> 
								</div>
								<div class="form-group">
									<label>Meta Keyword</label>
									<input class="form-control" type="text" name="keyword" required="required">
								</div>
								<div class="form-group" style="text-align:right">
									<button type="submit" class="btn btn-primary"> Simpan </button>
								</div>
								</form>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});
	});
</script>

	<script src="<?php echo base_url();?>assets/lumino/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
