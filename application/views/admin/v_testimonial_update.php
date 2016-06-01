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
				<h1 class="page-header">Testimonial</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">tambah</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<div class="col-lg-3">
								<form action="<?php echo base_url();?>adm_testimonial/tambah" method="post" enctype="multipart/form-data">
									<div class="form-group">
											<label>Nama</label>
											<input class="form-control" type="text" name="nama" required="required">
									</div>
									<div class="form-group">
											<label>Posisi</label>
											<input class="form-control" type="text" name="posisi" required="required">
									</div>
									<div class="form-group">
											<label>Perusahaan</label>
											<input class="form-control" type="text" name="perusahaan" required="required">
									</div>
									<div class="form-group">
											<label>Testimonial</label>
											<textarea class="form-control" rows="3" name="testimonial" required="required"></textarea>
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
							<div class="col-lg-9">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>GAMBAR</th>
										<th>NAMA</th>
										<th>POSISI</th>
										<th>PERUSAHAAN</th>
										<th>TESTIMONIAL</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($testi as $key) {
										echo '<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$key->id_testi.'">
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
											        <a class="btn btn-primary" href="'.base_url().'adm_testimonial/hapus/'.$key->id_testi.'">Hapus</a>
											        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
											</div><!-- /.modal -->';
									echo '<tr>
											<td><img src="'.base_url().'upload/testim/'.$key->gambar.'"</td>
											<td>'.$key->nama.'</td>
											<td>'.$key->posisi.'</td>
											<td>'.$key->perusahaan.'</td>
											<td>'.$key->testi.'</td>
											<td><a href="#" class="btn" data-toggle="modal" data-target="#myModal'.$key->id_testi.'"><i class="fa fa-trash-o"></i></a></td>
											<td><a href="#" class="btn"><i class="fa fa-pencil-square-o"></i></a></td>
										</tr>';
										}?>
								</tbody>
							</table>
							
								
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
