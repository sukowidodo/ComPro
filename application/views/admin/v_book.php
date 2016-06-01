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
				<h1 class="page-header">Katalog Buku</h1>
			</div>
		</div><!--/.row-->
		<?php if (isset($e_id)) {
			$action = base_url().'adm_book/update';
			$e_id = $e_id;
			$e_judul = $e_judul;
			$e_isi = $e_isi;
			$e_gambar = '<img class="img img-responsive" style="height:100px;" src="'.base_url().'upload/buku/'.$e_gambar.'">';
			$e_penerbit = $e_penerbit;
		}else{
			$action = base_url().'adm_book/tambah';
			$e_id = "";
			$e_judul = "";
			$e_isi = "";
			$e_gambar = "";
			$e_penerbit = "";
		}?>
		<?php $this->load->view('admin/v_count');?>
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Katalog Buku</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						 <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
							<div class="col-lg-6">
								<input class="form-control" name="id_buku" type="text" value="<?php echo $e_id;?>" style="display:none;">
								<input class="form-control" placeholder="judul buku" name="judul" required="required" value="<?php echo $e_judul;?>">
							</div>
							
							<div class="col-lg-12">
								<div class="form-group">
									<textarea  name="deskripsi" id="ckeditor" class="ckeditor" required="required"><?php echo $e_isi;?></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="penerbit" name="penerbit" required="required" value="<?php echo $e_penerbit;?>">
								</div>

								<div class="col-lg-6">
								<div class="form-group">
									<input type="file" name="filefoto">
									<?php echo $e_gambar;?>
								</div>
							</div>



								<div class="form-group" style="text-align:right">
									<button type="submit" class="btn btn-primary"> Simpan </button>
								</div>
								</form>
						</div></div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
					<?php foreach ($buku as $row) {	
					 $desc = substr($row->desc_buku,0,180).'...';
					 echo 
								'<div class="modal fade" tabindex="-1" role="dialog" id="myModal'.$row->id_buku.'">
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
								        <a href="'.base_url().'adm_book/hapus/'.$row->id_buku.'" class="btn btn-primary">Yes</a>
								        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
								      </div>
								    </div><!-- /.modal-content -->
								  </div><!-- /.modal-dialog -->
								</div><!-- /.modal -->';
					 ?>					
							<div class="col-lg-12" style="margin:5px;">
								<div class="col-lg-2">
									<img src="<?php echo base_url();?>upload/buku/<?php echo $row->gambar;?>" class="img img-responsive" style="max-height:200px;">
								</div>
								<div class="col-lg-10">
									<div class="title"><h3><?php echo $row->judul_buku;?></h3></div>
								<div class="caption"><?php echo $desc;?></div>
								<div class="tool" style="border-top:3px double #5F6468;border-bottom:3px double #5F6468;">
									<a href="" class="btn" data-toggle="modal" data-target="#myModal<?php echo $row->id_buku;?>">
										<i class="fa fa-trash-o"></i></a>
									<a href="<?php echo base_url();?>adm_book/dataedit/<?php echo $row->id_buku;?>" class="btn">
										<i class="fa fa-pencil-square-o"></i>
									</a>
									<a href="<?php echo base_url();?>adm_seo/buku/<?php echo $row->id_buku;?>" class="btn">
									<i class="fa fa-line-chart"></i>
									</a>
								</div>
								</div>
							</div>
							<?php } ?>
							<div class="paging" style="text-align:center">
								<?php echo $halaman;?>
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
