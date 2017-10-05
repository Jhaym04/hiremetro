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
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" style="margin-right: 20px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</nav>
	
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