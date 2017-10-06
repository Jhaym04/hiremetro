<!-- homepage lol -->

<?php
	if($this->session->userdata('signup1') == TRUE){
		
		$this->session->set_userdata('signup1', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#signup2Modal').modal('show');
			});
		</script>";
		
		$this->session->set_userdata('signup1', FALSE);
	};
	
	if($this->session->userdata('back') == TRUE){
		
		$this->session->set_userdata('back', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#signup1Modal').modal('show');
			});
		</script>";
		
	}
	
	if($this->session->userdata('login_FALSE') == TRUE){
		
		$this->session->set_userdata('login_FALSE', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#loginFALSE').modal('show');
			});
		</script>";
		
		
	}
?>
	
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
				<?php
					
					if($this->session->userdata('logged_in') == TRUE){
						echo '
						<li><a href="'; echo base_url('hiremetro'); echo '"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a href="#"  style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '.$this->session->userdata('username').' </a>
							<ul class="dropdown-menu">
								<li><a href="'; echo base_url('hiremetro/view_profile'); echo '">Profile <span style="color: black;" class="glyphicon glyphicon-user"></span></a></li>
								<li><a href="'; echo base_url('hiremetro/logout'); echo'"> Logout <span style="color: black;" class="glyphicon glyphicon-off"></span></a></li>
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
	
	<!-- Parallax Background -->
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 50%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
			
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
					<form action="<?php echo base_url('hiremetro/search') ?>" method="post">
						<input type="text" name="valueToSearch" placeholder="Search">
						<input type="submit" name="search" value="Search">
					</form>
				</div>
				
				<!-- categories -->
				
				<div class="row text-center">
					
					<br /> <br />
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=bartender';?>"><img src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
						<h4> BARTENDER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=gardener';?>"><img src="<?php echo base_url('images/gardener.png')?>" alt=""></a>
						<h4> GARDENER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=nanny';?>"><img src="<?php echo base_url('images/nanny.png')?>" alt=""></a>
						<h4> NANNY </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=carpenter';?>"><img src="<?php echo base_url('images/carpenter.png')?>" alt=""></a>
						<h4> CARPENTER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=janitor';?>"><img src="<?php echo base_url('images/janitor.png')?>" alt=""></a>
						<h4> JANITOR </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=plumber';?>"><img src="<?php echo base_url('images/plumber.png')?>" alt=""></a>
						<h4> PLUMBER </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=cook';?>"><img src="<?php echo base_url('images/cook.png')?>" alt=""></a>
						<h4> COOK </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=maid';?>"><img src="<?php echo base_url('images/maid.png')?>" alt=""></a>
						<h4> MAID </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=tutor';?>"><img src="<?php echo base_url('images/tutor.png')?>" alt=""></a>
						<h4> TUTOR </h4>
						<br /> <br />
					</div>
					<div class="col-md-2">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=driver';?>"><img src="<?php echo base_url('images/driver.png')?>" alt=""></a>
						<h4> DRIVER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=masseuse';?>"><img src="<?php echo base_url('images/massause.png')?>" alt=""></a>
						<h4> MASSEUSE </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=waiter';?>"><img src="<?php echo base_url('images/waiter.png')?>" alt=""></a>
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
				<a style="cursor: pointer;" href="<?php echo base_url('hiremetro/view_about');?>">About Us</a>
				<br /><a>Comments</a>
				<br /><a>Suggestions</a>
				<br />
			</div>
			<div class="col-lg-2">
				</br>
				<a data-toggle="modal" data-target="#specialoffersModal" style="cursor: pointer;">Special Offers</a>
				<br /><a data-toggle="modal" data-target="#termsofservModal" style="cursor: pointer;">Terms of Service</a>
				<br /><a>Freebies</a>
				<br />
			</div>
			<div class="col-lg-4 text-center">
				<br />
				<p>hiremetro © 2017 | Designed by Group 4</p>
			</div>
			<div class="col-lg-3 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt=""> facebook.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			 <div class="col-lg-1">
			 </div>
			
		</div>
		
	</div>