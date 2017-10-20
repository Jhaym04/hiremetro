
<style>

div {
	font-family: montserrat;
}

#scroll {
	width: 364.6px;
	height: 622px;
	overflow-y: scroll;
}

#borderleft{
	border-left: 2px solid lightgray;
	padding-left: 35px;
	
}

#padd { 
padding-right:20px;
}

#paddd{
	padding-right: 35px;
}

.badge {
	background-color: #3b8686;
}

#head {
	padding-top: 10px;
	font-family: montserrat;
	font-size: 30px;
	color: #3b8686;
}
#content {
	padding-top: 10px;
	padding-left: 20px;
	font-family: montserrat;
	font-size: 20px;
}

.fix-div {position:fixed; height:100%; width: 100%; left 0%; top:0%; z-index:1;}
#wrapper {position:relative; z-index:2; margin:100%; 0 0}

#padds {
	padding-right: 20px;
}

#sign {
    background-color: #3b8686;
    color: white;
	border-radius: 10px;
    padding: 0px 50px;
    text-align: center;
    font-size: 22px;
}

.name {height:40px; width: 210px; margin: 2px; padding: 5px; font-size: 18px;}
.info {height:40px; width: 429px; margin: 2px; padding: 5px; font-size: 18px;}


</style>

<!-- filter-->
	
	<!-- Navbar -->
		
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				<img src="<?php echo base_url('images/logo.png')?>">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

				</button>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Login</a></li>
				<li><a href="#">Join Us</a></li>
				
			</ul>
		</div>
	</nav>

	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
	<br />
	<br />
	<br />
		<div id= "whole" class="row ">
			
			<div class="col-md-1" >
			</div>
			
			<div class="col-md-10 ">
			
			<!--MALAKI-->
			
				<div id="left" class="col-md-7" id="paddd">
				
					<div class="row" id="padd">
						<ul class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Join Us</a></li>
						</ul>
					</div>
					
					<div class="row" style="position: relative; top: -30px;">
				
						<div class="col-md-11">
							<div class="row" style="padding-left: 30px;">
								<h1>Join Us</h1>
							</div>
							
							<div class="row" style="padding-left: 20px;">
								<h4>be part of Hiremetro by filling up this form and signing up!</h4>
								<br />
							</div>	
							
							<div class="row" style="padding-left: 70px;">
								<form action="#">
								  <input class="name" type="text" name="firstname" placeholder="First Name">
								  <input class="name" type="text" name="lastname" placeholder="Last Name"> <br />
								  <input class="info" type="text" name="email" placeholder="Email"> <br />
								  <input class="info" type="password" name="password" placeholder="Password"> <br />
								</form>
							</div>
							
							<div class="row" style="padding-left: 70px; padding-right: 70px;">
								<br />
								<h5>By clicking Create Account, you agree to our <u style="color: blue;">Terms of Service</u>. You may receive e-mail from Hiremetro at any time.</h5>
							</div>

							<div class="row" style="padding-left: 100px;">
								<form action="#">
								  <input type="checkbox" name="name" value="value"> I agree to terms of service of Hiremetro.</input>
								  <br /> <br />
								  <input type="submit" value="Sign Up" id="sign">
								</form>
							</div>	
							
						</div>
						<div class="col-md-1">
						</div>					
					</div>
					<br />
					
										
						
				</div>
				
				
				<!--MALIIT-->
					
				<div id="right" class="col-md-5" id="borderleft">

					<div class="row" >
						<br /> <br />
						<p id="head">
							Be a <b>Customer</b>
						</p>
						<p id="content">
							Search and find hundreds of skilled laborers around Philippines Hiremetro has to offer.
						</p>
						<br />
						<p id="head">
							Be a <b>Laborer</b>
						</p>
						<p id="content">
							Want a job? Be searched and meet your own employer by making your own advertisment. Sign up now!
						</p>
						<br />
						<br />
					</div>
						
											
				</div>
									
			</div>
	
			<div class="col-md-1">
			</div>
			
		</div>
		<br />

		<!--footer-->
		
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
