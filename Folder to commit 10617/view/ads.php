<!-- homepage lol -->
	
	<!-- Navbar -->
		
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				<img src="<?php echo base_url('images/logo.png')?>" >
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right">
				<li><a data-toggle="modal" data-target="#signup1Modal" style="cursor: pointer;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	
	<!-- Modal for login-->
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
	
	<!-- Modal for wrong login-->
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
									<input type="text" class="form-control" name="firstname" placeholder="First name"> 
									<input type="text" class="form-control" name="middlename" placeholder="Middle Initial"> 
									<input type="text" class="form-control" name="lastname" placeholder="Last name"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="address" placeholder="Address"> 
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
						<form action="<?php echo base_url('hiremetro/signup2')?>" method="post">
							<div class="form-vertical">
								<div class="form-group form-inline">
									<input type="text" class="form-control" name="username" placeholder="Username"> 
									<input type="password" class="form-control" name="password" placeholder="Password">  
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
									<input type="text" class="form-control" name="work_description" placeholder="Work Description"> 
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="work_pay" placeholder="Work Pay"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="work_location" placeholder="Service Location"> 
								</div>
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
	
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " id="jobs">
				
				<br /> <br /> 			
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-3 text-center">
						<img src="<?php echo base_url('images/carpenter.png')?>" alt="">
						<br /> <br />					
					</div>
					
					<div class="col-md-3 text-center" >
						<h2>
							<?php foreach((array)$employees as $e) {
							echo ''.$e['lname'].', '.$e['fname'].' '.$e['mname'].'';
							}
							?>
						</h2>
						<h2 style="color:Teal">
							<?php foreach((array)$employees as $e) {
							echo ''.$e['work_title'].'';
							}
							?>
						</h4>
						
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
			
			</div>
			
			<div class="col-md-1">
			</div>
			
		
		
		</div>
		
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6 text-center">
			<p>
				<?php foreach((array)$employees as $e) {
					echo ''.$e['work_description'].'';
					}
				?>
			</p>
			</div>
			<div class="col-md-3">
			</div>
		</div>
		
		<div class="row">
		<div class="col-md-3">
			</div>
		<div class="col-md-6 text-center">
		<hr style="border:1px solid #000"/>
		</div>
		<div class="col-md-3">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" style="border: 2px solid gray">
					<div class="row">
						<div class="col-md-12">
							<h2>Know More</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						<hr style="border:1px solid #000"/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<h4><span class="glyphicon glyphicon-envelope"></span>
								<?php foreach((array)$employees as $e) {
								echo ''.$e['email'].'';
								}
								?>
							</p>
							<h4><span class="glyphicon glyphicon-map-marker red"></span> 
								<?php foreach((array)$employees as $e) {
								echo ''.$e['worker_location'].'';
								}
								?>
							</p>
							<h4><span class="glyphicon glyphicon-phone"></span>
								<?php foreach((array)$employees as $e) {
								echo ''.$e['contact'].'';
								}
								?>
							</p>	
						</div>
						<div class="col-md-4">
							<h4>Birthday: <?php foreach((array)$employees as $e) {
								echo ''.$e['birthday'].'';
								}
								?>
							</h4>
							<h4>Sex: <?php foreach((array)$employees as $e) {
								echo ''.$e['sex'].'';
								}
								?>
							</h4>
							<h4>Languages Spoken: <?php foreach((array)$employees as $e) {
								
								//$string=implode(' |',$e['languages']);
								//echo $string;
								echo print_r($e['languages'], true);
								//echo ''.$e['languages'].'';
								}
								?>
							</h4>
							
						</div>
						<div class="col-md-3">
							<div class="row">
							<button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Resume </button>
							</div>
							<br />
							<div class="row">
							<button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Credentials </button>
							</div>
						</div>
					</div>
					
			</div>
			<div class="col-md-3">
			</div>
		</div>
		
		<br />
		<br />
		<br />
		<br />
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