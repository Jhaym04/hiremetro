<!-- filter lol -->

	 <?php
	// if(isset($_POST['search'])) {
		// $valueToSearch = $_POST['valueToSearch'];
		//search in all table columns
		//using concat mysql function
		// $query = "SELECT * FROM `employee_information` WHERE CONCAT(`fname`, `lname`, `mname`, `address`) LIKE '%".$valueToSearch."%'";
		// $search_result = filterTable($query);
	// }
	// else {
		// $query = "SELECT * FROM `hm_updated`";
		// $search_result = filterTable($query);
	// }

	//function to connect and execute the query
	// function filterTable($query) {
		// $connect = mysqli_connect("localhost", "root", "", "hm_updated");
		// $filter_Result = mysqli_query($connect, $query);
		// return $filter_Result;
	// }
	//function to compute age
		function ageCalculator($dob){
			if(!empty($dob)){
				$birthdate = new DateTime($dob);
				$today   = new DateTime('today');
				$age = $birthdate->diff($today)->y;
				return $age;
			}
			else{
				return 0;
			}
	}
	// ?>
	
	<!-- Navbar -->		
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
			<img src="<?php echo base_url('images/logo.png')?>">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" />
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
			<div class="col-md-2 ">
			</div>
				
			<div class="col-md-8 ">
				<br /> <br /> <br /> <br /> 
					
				<!-- search bar -->
				<div class="row text-center " id="search">
					<form action="<?php echo base_url('hiremetro/search') ?>" method="post">
						<input type="text" name="valueToSearch" placeholder="Search">
						<input type="submit" name="search" value="Search">
					</form>
				</div>	
			</div>
				
			<div class="col-md-2 ">
			</div>	
		</div>
			
		<br/>
			
		<!-- filter -->
		<div class="row">
			
			<?php 
				
				foreach((array)$employees as $e){
					$dob= $e['birthday'];
					$dob= ageCalculator($dob);
					echo '
						<div class="col-md-3 ">
						</div>				
							
						<div class="col-md-8">
							<div class="col-md-2">
								<a href=""><img src="images/driver.png" class="img-responsive" alt="" ></a>
							</div>		
								
							<div class="col-md-7">
								<a href="'; echo base_url('hiremetro/employee_profile').'?username='.$e['username'].'"><h4>'.$e['lname'].', '.$e['fname'].' '.$e['mname'].'</h4></a>
								<h5> '.$e['address'].' | '.$e['sex'].' | '.$dob.' yrs old </h5>
								<h6> '.$e['description'].'	</h6>
							</div>
								
							<div class="col-md-3">
							</div>
						</div>	
							
						<div class="col-md-1 ">
						</div>	';				
				}
			?>
			
			
		</div>
				
	</div>
		
	</br>
		
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
