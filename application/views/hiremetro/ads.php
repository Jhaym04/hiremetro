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
						<li><a href="'; echo base_url('hiremetro'); echo '"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a data-toggle="modal" data-target="#signup1Modal" style="cursor: pointer;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> ';
					};
				?>
			</ul>
		</div>
	</nav>

		
	
	
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " >
				
				<br /> <br /> 			
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-3 text-center dp">
						<img src="<?php echo base_url($employees[0]['picture'])?>" alt="">
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
		<hr style="border:0.5px solid #cccccc"/>
		</div>
		<div class="col-md-3">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8" style="border: 2px solid #cccccc">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Know More</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
						<hr style="border:0.5px solid #cccccc"/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
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
						<div class="col-md-5">
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
								echo ''.$e['work_language'].'';
								}
								?>
							</h4>
							
						</div>
						<div class="col-md-2">
							<div class="row">
							<button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Resume </button>
							</div>
							<br />
							<div class="row">
							<button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Credentials </button>
							</div>
						</div>
					</div>
					
			</div>
			<div class="col-md-2">
			</div>
		</div>
		
		<br />
		<br />
		<br />
		<br />
		