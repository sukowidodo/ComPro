<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="<?php echo base_url();?>assets/lumino/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lumino/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/lumino/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form action="<?php echo base_url();?>login/proseslogin" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">SUBMIT</button>
						</fieldset>
					</form>
					<br>

					<?php if(isset($error)) echo '
					<div class="alert bg-danger" role="alert">
					<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>'.$error.'<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
					</div>';	
					if(isset($logout)) 
						echo '
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg>'.$logout.'<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>';?>
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	<script src="<?php echo base_url();?>assets/lumino/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/lumino/js/bootstrap-datepicker.js"></script>
	<script>
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
