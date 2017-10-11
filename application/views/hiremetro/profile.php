<!-- profile -->
	
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
			
			<div class="col-md-10 ">
				
				<br /> <br /> 			
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-3 text-center">
						<img src="<?php echo base_url('images/carpenter.png')?>" alt="">
						<h4> CARPENTER </h4>
						<br /> <br />					
					</div>
					
					<div class="col-md-3 text-center" >
						<h2><?php echo $employee['fname'].$employee['mname'].$employee['lname'];?></h2>
						<h4><span class="glyphicon glyphicon-envelope"></span> <?php echo $employee['email'];?></p>
						<h4><span class="glyphicon glyphicon-map-marker red"></span><?php echo $employee['worker_location'];?></p>
						<h4><span class="glyphicon glyphicon-phone"></span> <?php echo $employee['contact'];?></p>	
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
			
			</div>
			
			<div class="col-md-1">
			</div>			
		
		</div>
		
		<br/>
		
		<div class="row">
		
			<div class="col-md-2 ">
			</div>
			
			<div class="col-md-8">
				<button class="accordion"  >View Employers</button>
					<div class="panel">
					  <p>Insert text</p>
					</div>

				<button class="accordion"  >Manage Ads</button>
					<div class="panel text-center">
					<div class="row">
						<div class "col-md-2">
						</div>
						<div class "col-md-8">
						<form action="<?php echo base_url('hiremetro/update_work');?>" method="post">
							<br />
							Work Title: 
							<input type="text" name="work_title" value="<?php echo $employee['work_title']; ?>" /> <br /><br />
							Work Description: 
							<input type="text" name="work_description" value="<?php echo $employee['work_description']; ?>" /> <br /><br />
							Work Location: 
							<input type="text" name="worker_location" value="<?php echo $employee['worker_location']; ?>" /> <br /><br />
							Work Pay: 
							<input type="number" name="work_pay" value="<?php echo $employee['work_pay']; ?>"/> <br /><br />  
						<button type="submit" class="btn btn-default" name="update">UPDATE</button>
						<br/>
						</div>
						<div class "col-md-2">
						</div>
						</form>
					</div>
					</br>
					</div>
				<button class="accordion" >Notification Settings</button>
					<div class="panel">
					  <p>Insert text</p>
					</div>

				<button class="accordion" >Account Settings</button>
					<div class="panel text-center">
					<form action="<?php echo base_url('hiremetro/update_information');?>" method="post">
						<br />
						First name 
						<input type="text" name="fname" value="<?php echo $employee['fname'];?>" /> <br /><br />
						Middle name 
						<input type="text" name="mname" value="<?php echo $employee['mname'];?>" /> <br /><br />
						Last name 
						<input type="text" name="lname" value="<?php echo $employee['lname'];?>" /> <br /><br />
						Username: 
						<input type="text" name="username" value="<?php echo $employee['username'];?>" /> <br /><br />
						Password: 
						<input type="password" name="password" value="<?php echo $employee['password']?>" /> <br /><br /> 
						Picture: 
						<button type="button"> Upload Picture </button> <br /><br /> 
					<button type="submit" class="btn btn-default" name="update">UPDATE</button>
					</form>
					<br>
					</div>
					
				<button class="accordion" id="red" >Deactivate</button>
				<div class="panel text-center">
					<br/>
					<p>Are you sure ?</p>
					<p>By pressing the DEACTIVATE button, all your records will all be deleted ..</p>
					<form action="<?php echo base_url('hiremetro/deactivate')?>" method="post">
						<button type="submit" class="btn btn-danger" name="deact">DEACTIVATE</button>
					</form>
					<br/>
				</div>
				<br/>
			</div>
			
			<div class="col-md-2 ">
			</div>

			</div>
			<br />

			


		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].onclick = function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		  }
		}
		</script>

		
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