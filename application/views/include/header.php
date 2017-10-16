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

	
	<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").delay(1500).fadeOut("slow");;
	});
	</script>
	
</head>
<body>
	<!-- Navbar -->
	
	<div class="se-pre-con text-center">
		<img src="<?php echo base_url('images/loader-64x/Preloader_4.gif')?>">
	</div>
	
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				<img src="<?php echo base_url('images/logo.png')?>">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right" id="navbuttons">
				<?php
					
					if($this->session->userdata('logged_in') == TRUE){
						echo '
						<li><a href="'; echo base_url('hiremetro'); echo '"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a href="#"  style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '.$this->session->userdata('username').' </a>
							<ul class="dropdown-menu">
								<li><a href="'; echo base_url('hiremetro/view_profile'); echo '">Profile <span style="color: black;" class="glyphicon glyphicon-user"></span></a></li>
								<li><a data-toggle="modal" data-target="#logout" style="cursor: pointer;"> Logout <span style="color: black;" class="glyphicon glyphicon-off"></span></a></li>
							</ul>
						</li>';
					}else{
						echo '
						<li><a data-toggle="modal" data-target="#signup1Modal" style="cursor: pointer;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> ';
					};
				?>
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
	
	<!-- Modal for forgotPassword-->
		<div class="modal fade" id="forgotPassword" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> FORGOT PASSWORD </h4>
					</div>
					<div class="modal-body text-center">
						<form action="<?php echo base_url('hiremetro/login_forgotpassword')?>" method="post">
							<p>Please enter your email</p>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email"> 
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default">Submit</button></a>
						<button class="btn btn-default" data-dismiss="modal">No</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	<!-- Modal for forgotPassword_correct-->
		<div class="modal fade" id="correct_forgotpassword" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> FORGOT PASSWORD </h4>
					</div>
					<div class="modal-body text-center">
						<p>A link has been sent to your Email</p>
					</div>
					<div class="modal-footer text-center">
						<button class="btn btn-default" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Modal for forgotPassword_wrong-->
		<div class="modal fade" id="wrong_forgotpassword" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> FORGOT PASSWORD </h4>
					</div>
					<div class="modal-body text-center">
						<p>The email you just entered isn't associated with any account</p>
					</div>
					<div class="modal-footer text-center">
						<form action="<?php echo base_url('hiremetro/login_forgotpassword')?>" method="post">
						<button type="submit" class="btn btn-default" name="retry" value="">RETRY</button>
						<button class="btn btn-default" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Modal for wrong login-->
		<div class="modal fade" id="loginFALSE" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> LOGIN </h4>
						<p>Attention</p>
					</div>
					<div class="modal-body text-center">
						<p>Wrong username or password !! Try again !</p>
					</div>
					<div class="modal-footer text-center">
						<button class="btn btn-default" data-dismiss="modal">Ok</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Modal for login-->
		<div class="modal fade" id="loginModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> LOGIN </h4>
						<p>check and update your account</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/login')?>" method="post">
							<div class="form-vertical">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username"> 
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password"> 
								</div>
								<br />
								<div class="text-center">
									<a href="<?php echo base_url('hiremetro/login_forgotpassword');?>?forgotpassword=1"> Forgot Password </a>
								</div>
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Modal for signup 1-->
		<div class="modal fade" id="signup1Modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> SIGN UP </h4>
						<p>become an employee</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/signup1')?>" method="post">
							<div class="form-vertical">
								<div class="form-group form-inline" id="signup_name">
									<input type="text" class="form-control" name="firstname" placeholder="First name" maxlength="50"> 
									<input type="text" class="form-control" name="middlename" placeholder="Middle Initial" maxlength="1"> 
									<input type="text" class="form-control" name="lastname" placeholder="Last name" maxlength="50"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="address" placeholder="Address" maxlength="100"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="contact_number" placeholder="Mobile number" maxlength="11"> 
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email" maxlength="50"> 
								</div>
								<div class="form-group">
									<div class="input-group date" data-provide="datepicker">
										<input type="text" class="form-control" name="birthday" placeholder="Birthday" readonly>
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-th"></span>
										</div>
										
										<script>
											$('.datepicker').datepicker();
										</script>
										
									</div>
								</div>
								<div class="form-group form-inline">
									<label class="radio-inline">
										<input type="radio" name="sex" value="Male" checked >Male
									</label>
									<label class="radio-inline">
										 <input type="radio" name="sex" value="Female">Female
									</label>
								</div>
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default" name="signup" value="1">Next</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	<!-- Modal for signup 2-->
		<div class="modal fade" id="signup2Modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> SIGN UP </h4>
						<p>Enter your work details !</p>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart('hiremetro/signup2');?>
							<div class="form-vertical">
								<div class="form-group form-inline">
									<input type="text" class="form-control" name="username" placeholder="Username" maxlength="50"> 
									<input type="password" class="form-control" name="password" placeholder="Password" maxlength="25">   
								</div>
								<div class="form-group">
								  <label for="sel1">Choose Work Category</label>
								  <select class="form-control" id="sel1" name="work_title">
									<option>Bartender</option>
									<option>Carpenter</option>
									<option>Cook</option>
									<option>Driver</option>
									<option>Gardener</option>
									<option>Janitor</option>
									<option>Maid</option>
									<option>Masseuse</option>
									<option>Nanny</option>
									<option>Plumber</option>
									<option>Tutor</option>
									<option>Waiter</option>
								  </select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="work_description" placeholder="Work Description" maxlength="250"> 
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="work_pay" placeholder="Work Pay eg(P500/day)"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="work_location" placeholder="Service Location" maxlength="100"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="work_language" placeholder="Language Spoken eg.(Tagalog)" maxlength="50"> 
								</div>
								<input type="file" name="userfile" size="20" />									
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default" name="back" value="0">Submit</button>
						<button type="submit" class="btn btn-default" name="back" value="1">Back</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal for special offers-->
		<div class="modal fade" id="specialoffersModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="soMod">
					<div class="modal-header text-center" id="soHeader">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> SPECIAL OFFERS </h4>
						<p>available for a limited time only</p>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-7 text-center" id="b2">
									<a href=""><img src="<?php echo base_url('images/b1.png'); ?>" /></a>
								<div class="row" id="b3">
									<a href=""><img src="<?php echo base_url('images/b3.png'); ?>" /></a>
								</div>
							</div>
							<div class="col-md-5 text-center">
								<a href=""><img src="<?php echo base_url('images/b2.png'); ?>" /></a>
							</div>
						</div>
					</div>
					<div class="modal-footer text-center">
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal for terms and conditions-->
		<div class="modal fade" id="termsofservModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="soMod">
					<div class="modal-header text-center" id="soHeader">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> HIREMETRO TERMS OF SERVICE </h4>
						<p>please read the following...</p>
					</div>
					<div class="modal-body" id="termsofserv">
						<div>
							<h3>1. Terms</h3>
							<p>By accessing Hiremetro website, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
							<h3>2. Use License</h3>
							<ol type="a">
							   <li>Permission is granted to temporarily download one copy of the materials (information or software) on Hiremetro's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
							   <ol type="i">
								   <li>modify or copy the materials;</li>
								   <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
								   <li>attempt to decompile or reverse engineer any software contained on Hiremetro's website;</li>
								   <li>remove any copyright or other proprietary notations from the materials; or</li>
								   <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
							   </ol>
								</li>
							   <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by Hiremetro at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
							</ol>
							<h3>3. Disclaimer</h3>
							<ol type="a">
							   <li>The materials on Hiremetro's website are provided on an 'as is' basis. Hiremetro makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
							   <li>Further, Hiremetro does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
							</ol>
							<h3>4. Limitations</h3>
							<p>In no event shall Hiremetro or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Hiremetro's website, even if Hiremetro or a Hiremetro authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
							<h3>5. Accuracy of materials</h3>
							<p>The materials appearing on Hiremetro website could include technical, typographical, or photographic errors. Hiremetro does not warrant that any of the materials on its website are accurate, complete or current. Hiremetro may make changes to the materials contained on its website at any time without notice. However Hiremetro does not make any commitment to update the materials.</p>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> I Understand Terms of Service</button>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
