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
				<h1 class="page-header">FAQ</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">List</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<table class="table">
						<thead>
							<th>No</th>
							<th>judul</th>
							<th>headline</th>
							<th>isi</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							 <?php
							 $i = 1;
							 foreach ($slider as $row) {
							 	//$no = $i++;
							 	$isi = substr($row->isi,0,180)."...";
							
							echo '<tr>
								<td>'.$row->id_slider.'</td>
								<td>'.$row->judul.'</td>
								<td>'.$row->headline.'</td>
								<td>'.$isi.'</td>
								<td><a href="" class="btn" data-toggle="modal" data-target="#myModal'.$row->id_slider.'"><h3><i class="fa fa-trash-o"></i></h3></td>
								<td><a href="" class="btn"><h3><i class="fa fa-pencil-square-o"></i></h3></a></td>
								<td></td>
								';

							echo '<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$row->id_slider.'">
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
											        <a class="btn btn-primary" href="'.base_url().'adm_slider/hapus/'.$row->id_slider.'">Hapus</a>
											        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
											</div><!-- /.modal -->';
							  } 
							 ?>
						</tbody>
						</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">tambah</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							 <form action="<?php echo base_url();?>adm_slider/tambah" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Judul</label><input class="form-control" placeholder="judul" name="judul">
							</div>
								<div class="form-group">
									<label>Headline</label><textarea  name="headline" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>isi</label><textarea  name="isi" id="ckeditor" class="ckeditor"></textarea>
								</div>
								<div class="form-group">
									<label>Gambar (Saran 406x595)</label><input type="file" name="gbr">
								</div>
								<div class="form-group">
									<label>Background (Saran 1400x730)</label><input type="file" name="bg">
								</div>
								<div class="form-group" style="text-align:right">
									<button type="submit" class="btn btn-primary"> Simpan </button>
								</div>
								</form>
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
