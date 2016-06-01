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
				<h1 class="page-header">Galeri</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
		
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading">Videos</div>
									<div class="panel-body">
										<div class="canvas-wrapper">
											<form action="<?php echo base_url();?>adm_video/tambah" method="post">
												<div class="form-group">
													<label>Judul Foto</label>
													<input class="form-control" type="text" name="judul" required="required">
												</div>
												<div class="form-group">
													<label>id_youtube</label>
													<input class="form-control" type="text" name="id_youtube" required="required">
												</div>
												<div class="form-group" style="text-align:right">
													<button type="submit" class="btn btn-primary"> Simpan </button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="<?php echo base_url();?>assets/lumino/tutor.jpg" class="img" style="border:2px solid;width:100%; margin-bottom:10px;">
								<div class="alert bg-danger" role="alert">
									<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg> Ambil id youtube seperti gambar diatas <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="panel panel-default">
								<div class="panel-heading">Videos</div>
									<div class="panel-body">
										<div class="canvas-wrapper">
										<table class="table">
											<tr>
												<td>Judul</td>
												<td>id_youtube</td>
												<td>Video</td>
												<td></td>
											</tr>
											<?php foreach ($video as $video) {
												 echo 
													'<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$video->id_video.'">
													  <div class="modal-dialog">
													    <div class="modal-content">
													      <div class="modal-header">
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        <h4 class="modal-title">Warning</h4>
													      </div>
													      <div class="modal-body">
													        <p>Apakah anda yakin ingin hapus ini?</p>
													      </div>
													      <div class="modal-footer">
													        <a href="'.base_url().'adm_video/hapus/'.$video->id_video.'" class="btn btn-primary">Yes</a>
													        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
													      </div>
													    </div><!-- /.modal-content -->
													  </div><!-- /.modal-dialog -->
													</div><!-- /.modal -->';
												echo'<tr>
														<td>'.$video->judul.'</td>
														<td>'.$video->id_youtube.'</td>
														<td><iframe width="300" height="169" src="https://www.youtube.com/embed/'.$video->id_youtube.'?rel=0" frameborder="0" allowfullscreen></iframe></td>
														<td>
															<a href="" class="btn" data-toggle="modal" data-target="#myModal'.$video->id_video.'"><i class="fa fa-trash-o"></i></a>
														</td>
													</tr>
												';
											}?>
										</table>
										</div>
									</div>
								</div>
							</div>
					</div><!--/.row-->
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

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
