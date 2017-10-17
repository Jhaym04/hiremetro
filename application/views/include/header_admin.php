<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />	
	
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	<link rel="icon" href="<?php echo base_url('images/logo1.ico')?>">
	
	<!--[if lt IE 9]>
		<script
		src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
		</script>
		<script
		src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
		</script>
	<![endif]-->
	
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap-datepicker.js');?>"> </script>
	
	<link rel="stylesheet" href="<?php echo base_url('css/home.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/filter.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/profile.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/ads.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/faqs.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/soffersterms.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/about.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/dashboard.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/admin_message.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/admin_settings.css')?>">
	
</head>
<body>
	<!-- Navbar -->
	
	
	
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				<img src="<?php echo base_url('images/logo.png')?>">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a style="color: white; margin-left: 350px; font-size: 20px;">Administrator Control Panel</a>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right" id="navbuttons">
						
					<li><a href="<?php base_url('hiremetro');?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a href="#"  style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> ADMIN </a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url('hiremetro/view_profile');?>">Profile <span style="color: black;" class="glyphicon glyphicon-user"></span></a></li>
								<li><a data-toggle="modal" data-target="#logout" style="cursor: pointer;"> Logout <span style="color: black;" class="glyphicon glyphicon-off"></span></a></li>
							</ul>
					</li>
			</ul>
		</div>
	</nav>
	
	<!-- Modal for logout-->
		<div class="modal fade" id="logout" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> LOGOUT </h4>
						<p>Attention</p>
					</div>
					<div class="modal-body text-center">
						<p>Are you sure ?</p>
					</div>
					<div class="modal-footer text-center">
						<a href="<?php echo base_url('hiremetro/logout');?>"><button class="btn btn-default">Yes</button></a>
						<button class="btn btn-default" data-dismiss="modal">No</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<body style="background-image: url('<?php echo base_url('images/bg.png');?>'); min-height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">>
