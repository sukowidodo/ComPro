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
				<h1 class="page-header">
				</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
		
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									Foto
								</div>
									<div class="panel-body">
										<div class="canvas-wrapper">
											<div class="col-lg-3">
											
											<?php foreach ($album as $row) {?>
											<?php $id_album = $row->id_album;?>
											<div style="border:solid 2px #E6E4E4">
											Sampul
											<div class="image" style="padding:20px; text-align:center">
											<img src="<?php echo base_url().'upload/galeri/thumb/'.$row->sampul;?>" class="img img-responsive"></div>
											<div class="judul" style="text-align:center; padding-bottom:20px;"><h3><?php echo $row->nama_album;?></h3></div>
											</div>
											<?php }?>
											</div>
											<div class="col-lg-6">
											<?php foreach ($detail as $row2) {?>
											<div class="col-lg-6">
											<div style="border:solid 2px #E6E4E4; margin-bottom:10px;">
											<div class="image" style="padding:10px; text-align:center">
											<img class="img img-responsive" src="<?php echo base_url().'upload/galeri/thumb/'.$row2->gambar;?>"></div>
											<div class="judul" style="text-align:center; padding-bottom:20px;margin:5px;"><h4><?php echo $row2->judul;?></h4></div>
											</div>
											</div>
											<?php }?>
											</div>
											<div class="col-lg-3">
												<form action="<?php echo base_url();?>adm_galeri/tambah2" enctype="multipart/form-data" method="post">
													<div class="form-group">
														<label>Judul Foto</label>
														<input class="form-control" type="text" name="judul">
														<input class="form-control" type="text" name="id_album" value="<?php echo $id_album;?>" style="display:none">
													</div>
													<div class="form-group">
														<label>Gambar</label>
														<input type="file" name="filefoto">
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
