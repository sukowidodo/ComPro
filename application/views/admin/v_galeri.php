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
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">images</div>
									<div class="panel-body">
										<div class="canvas-wrapper">
											<div class="col-lg-6">

												<form action="<?php echo base_url();?>adm_galeri/tambah" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<label>Judul Album</label>
														<input class="form-control" type="text" name="judul">
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
											<div class="col-lg-6">
											<table class="table">
												<thead>
													<th>ALBUM</th>
													<th>SAMPUL</th>
													<th>ACTION</th>
												</thead>
											<tbody>
											<?php 
											$i = 1;
											foreach ($galeri as $row) {

												$no = $i++;
												echo 
													'<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$row->id_album.'">
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
													        <a href="'.base_url().'adm_galeri/hapus/'.$row->id_album.'" class="btn btn-primary">Yes</a>
													        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
													      </div>
													    </div><!-- /.modal-content -->
													  </div><!-- /.modal-dialog -->
													</div><!-- /.modal -->';
												?>
											<tr>
												<td><?php echo $row->nama_album;?></td>
												<td><img src="<?php echo base_url().'upload/galeri/thumb/'.$row->sampul;?>"></td>
												<td>
												<a href="<?php echo base_url().'adm_galeri/detail/'.$row->id_album;?>" class="btn btn-primary"><i class="fa fa-plus-square"></i></a>
												<a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row->id_album;?>"><i class="fa fa-trash-o"></i></a>
												</td>

											<?php }?>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
								<div class="panel panel-default">
								<div class="panel-heading">video</div>
									<div class="panel-body">
										<div class="canvas-wrapper">
										
											
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
