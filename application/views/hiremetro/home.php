<!-- homepage lol -->
	
	<!-- Navbar -->
		
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
		
			<ul class="nav navbar-nav navbar-right">
				<li><a data-toggle="modal" data-target="#signupModal" style="cursor: pointer;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	
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
									<a href=""> Forgot Password </a>
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
	
	<!-- Modal for signup-->
		<div class="modal fade" id="signupModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> SIGN UP </h4>
						<p>become an employee</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/signup')?>" method="post">
							<div class="form-vertical">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username"> 
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password"> 
								</div>
								<div class="form-group form-inline">
									<input type="text" class="form-control" name="firstname" placeholder="First name"> 
									<input type="text" class="form-control" name="lastname" placeholder="Last name"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="contact_number" placeholder="Mobile number"> 
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email"> 
								</div>
								<div class="form-group">
									<div class="input-group date" data-provide="datepicker">
										<input type="text" class="form-control" name="birthday" placeholder="Birthday">
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
										<input type="radio" name="gender" value="Male">Male
									</label>
									<label class="radio-inline">
										 <input type="radio" name="gender" value="Female">Female
									</label>
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
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		
		<!-- NEED HELP? -->
		
		<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
			<ol	class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" ></li>
				<li data-target="#myCarousel" data-slide-to="2" ></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo base_url('images/pic1.jpg')?>" alt="">
				</div>
				
				<div class="item">
					<img src="<?php echo base_url('images/pic2.jpg')?>" alt="">
				</div>
				
				<div class="item">
					<img src="<?php echo base_url('images/pic3.jpg')?>" alt="">
				</div>
			</div>
			
			
			</div>
		</div>
		
		<!-- jobs -->
		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " id="jobs">
				
				<br /> <br />
				
				<!-- search bar -->
				
				<div class="row text-center " id="search">
					<form action="" method="get">	
						<input type="text" name="search" class="search" value="Find manpower ... " /> 
						<input type="submit" value="Search" />
					</form>
				</div>
				
				<!-- categories -->
				
				<div class="row text-center">
					
					<br /> <br />
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<a href=""><img src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
						<h4> BARTENDER </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/gardener.png')?>" alt=""></a>
						<h4> GARDENER </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/nanny.png')?>" alt=""></a>
						<h4> NANNY </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href=""><img src="<?php echo base_url('images/carpenter.png')?>" alt=""></a>
						<h4> CARPENTER </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/janitor.png')?>" alt=""></a>
						<h4> JANITOR </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/plumber.png')?>" alt=""></a>
						<h4> PLUMBER </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href=""><img src="<?php echo base_url('images/cook.png')?>" alt=""></a>
						<h4> COOK </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/maid.png')?>" alt=""></a>
						<h4> MAID </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/tutor.png')?>" alt=""></a>
						<h4> TUTOR </h4>
						<br /> <br />
					</div>
					<div class="col-md-2">
						<a href=""><img src="<?php echo base_url('images/driver.png')?>" alt=""></a>
						<h4> DRIVER </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/massause.png')?>" alt=""></a>
						<h4> MASSEUSE </h4>
						<br /> <br />
						<a href=""><img src="<?php echo base_url('images/waiter.png')?>" alt=""></a>
						<h4> WAITER </h4>
						<br /> <br />
						<br /> <br />
					</div>
					<div class="col-md-1">
					</div>
				
				</div>	
			
			</div>
			
			<div class="col-md-1">
			</div>
			
		
		</div>
		
		<!-- footer -->
		
		<div class="row" id="footer">
			
			<div class="col-lg-1">
			</div>
			<div class="col-lg-1">
				</br>
				<a>About Us</a>
				<br /><a>Comments</a>
				<br /><a>Suggestions</a>
				<br />
			</div>
			<div class="col-lg-1">
				</br>
				<a>Special Offer</a>
				<br /><a>Discount</a>
				<br /><a>Freebies</a>
				<br />
			</div>
			<div class="col-lg-6 text-center">
				<br />
				<p>hiremetro © 2017 | Designed by Group 4</p>
			</div>
			<div class="col-lg-2 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt=""> facebook.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			<div class="col-lg-1">
			</div>
			
		</div>
		
	</div>