<!DOCTYPE html>
<html>
<?php $this->load->view('admin/v_head');?>
<script type="text/javascript">
						$(document).ready(function(){
							$("#checkAll").change(function () {
    						$("input:checkbox").prop('checked', $(this).prop("checked"));
							});
						});	
						$(document).ready(function(){
							$('#myModal').on('shown.bs.modal', function () {
  							$('#myInput').focus()
})
						});	
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>

		<?php $author = $this->session->userdata('username');?>
		<?php $date =  date('d-m-Y');?>
		<form role="form" action="<?php echo base_url();?>adm_index/doinsert" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">Artikel</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<div class="form-group" style="text-align:right">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							
								<div class="form-group">
									<label>Judul</label>
									<input class="form-control" type="text" name="judul" required="required">
								</div>
								<div class="form-group">
									<label>Kategori</label>
									<select class="form-control" name="id_kategori">
									<option selected="selected" >pilih</option>
									<?php foreach ($kategori as $row) {
										echo '<option value="'.$row->id_kategori.'">'.$row->nama_kategori.'</option>';
									}?>										
									</select>
								</div>
								<div class="form-group">
									<label>Headline</label>
									<textarea rows="3"  name="headline" class="form-control" required="required"></textarea>
								</div>
								<div class="form-group">
									<label>isi</label>
									<textarea rows="6" id="ckeditor" class="ckeditor" name="isi" required="required"></textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="filefoto">
								</div>
								<div class="form-group" style="display:none"> <!-- tidak ditampilkan -->
									<label>Author :</label>
									<input class="form-control" type="text" name="author" value="<?php echo $author;?>" >
								</div>
								<div class="form-group" style="text-align:right">
									<button type="submit" class="btn btn-primary"> Simpan </button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">List Artikel</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						
						<table class="table" data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
						<thead>
						<tr>
						<th><input type="checkbox" name="vehicle" value="Bike" id="checkAll"></th><th>judul</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($list as $baris) {

							echo 
								'<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$baris->id_artikel.'">
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
								        <a href="'.base_url().'adm_index/hapus/'.$baris->id_artikel.'" class="btn btn-primary">Yes</a>
								        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
								      </div>
								    </div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->';
							echo '
							<tr>
							<td><input type="checkbox" name="vehicle" value="'.$baris->id_artikel.'"></td>
							<td>'.$baris->judul.'</td>
							<td>
							<a class="btn" href="'.base_url().'adm_index/update_data/'.$baris->id_artikel.'"><i class="fa fa-pencil"></i></a>
							</td>
							<td>
							<a href="#" class="btn" data-toggle="modal" data-target="#myModal'.$baris->id_artikel.'"><i class="fa fa-trash-o"></i></a></td> 
							<td>
							<a href="'.base_url().'adm_seo/blog/'.$baris->id_artikel.'" class="btn"><i class="fa fa-line-chart"></i></a><td>
							</tr>';
						}?>
						<tr>
							<td colspan="3">
								<?php echo $halaman;?>
							</td>
						</tr>
						</tbody>	
						</table>
						<a class="btn btn-danger" data-toggle="modal" data-target="#all">Hapus</a>
						<div class="modal fade" tabindex="-1" role="dialog" id="all">
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
								        <button type="button" class="btn btn-primary">Yes</button>
								        <button type="button" class="btn btn-primary">Cancel</button>
								      </div>
								    </div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							<!--<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>-->
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
