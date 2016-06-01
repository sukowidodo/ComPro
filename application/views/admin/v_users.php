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
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
		
		<?php $this->load->view('admin/v_count');?>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">tambah</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<?php
						if (!isset($user)) {
							$user = "";
							$id = "";
							$action = base_url().'adm_users/tambah';
							$button = "Simpan";
						}else
						{
							$action = base_url().'adm_users/update';
							$button = "update";
						}?>
						<form method="post" action="<?php echo $action;?>">
							<div class="form-group">
									<label>username</label>
									<input class="form-control" type="text" name="username" required="required" value="<?php echo $user;?>">
							</div>
							<div class="form-group">
									<label>password</label>
									<input class="form-control" type="text" name="password" required="required" value="">
							</div>
							<div class="form-group">
							<?php 

							if ($level=="admin") {
								$level1 = "checked";
								$level2 = "";
							}elseif ($level=="editor") {
								$level2 = "checked";
								$level1 = "";
							}else{
								$level1 = "";
								$level2 = "";
							}?>
								
									<div class="radio">
										<label>
											<input type="radio" name="level" id="optionsRadios3" value="admin" <?php echo $level1;?>>Admin
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="level" id="optionsRadios3" value="editor" <?php echo $level2;?>>Editor
										</label>
									</div>
						
								</div>
							<div class="form-group">
									<button class="btn btn-primary" type="submit"><?php echo $button;?></button> 
									<input type="text" style="display:none" name="id" value="<?php echo $id;?>">
								</div>
								</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">tambah</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>username</th>
										<th>Password</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$no=1;
								foreach ($users as $row) {
									echo '
										<tr>
										<td>'.$no++.'</td>
										<td>'.$row->username.'</td>
										<td>'.$row->password.'</td>
										<td>'.$row->level.'</td>
										<td> 
											<a href="'.base_url().'adm_users/edit/'.$row->id_user.'" class="btn"><i class="fa fa-pencil"></i></a>';?>
											<a href="<?php echo base_url();?>adm_users/hapus/<?php echo $row->id_user;?>" class="btn" onclick="return confirm('Anda yakin ingin menghapus <?php echo $row->username; ?>?')"><i class="fa fa-trash"></i></a> 
										</td>
										</tr>
									
								<?php }
								?>
									
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
