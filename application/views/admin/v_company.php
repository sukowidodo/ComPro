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
				<h1 class="page-header">Company</h1>
			</div>
		</div><!--/.row-->
		
		<?php // $this->load->view('admin/v_count');?>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">tambah</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<form action="<?php echo base_url();?>adm_company/tambah" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>nama</label>
									<input class="form-control" type="text" name="nama" required="required">
								</div>
								<div class="form-group">
									<label>url</label>
									<input class="form-control" type="url" name="url" >
								</div>
								<div class="form-group">
									<input type="file" name="filefoto">
								</div>
								<div class="form-group">
									<button class="btn btn-primary" type="submit">Simpan</button> 
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
								<table class="table">
									<thead>
										<th>
											Nama 
										</th>
										<th>
											logo
										</th>
									</thead>
									<tbody>
									<?php foreach ($company as $row) {?>
										<tr>
											<td>
												<?php echo $row->nama;?>
											</td>
											<td>
												<img style="height:50px;" src="<?php echo base_url().'upload/company/'.$row->gambar;?>">
											</td>
											<td>
												<a href="<?php echo base_url().'adm_company/hapus/'.$row->id_company;?>"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
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