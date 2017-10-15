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
									<input type="text" class="form-control" name="firstname" placeholder="First name" maxlength="50"> 
									<input type="text" class="form-control" name="middlename" placeholder="Middle Initial" maxlength="1"> 
									<input type="text" class="form-control" name="lastname" placeholder="Last name" maxlength="50"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="address" placeholder="Address" maxlength="50" maxlength="100"> 
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="contact_number" placeholder="Mobile number" maxlength="11"> 
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
						<form action="<?php echo base_url('hiremetro/signup2')?>" method="post">
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
									<input type="number" class="form-control" name="work_pay" placeholder="Work Pay"> 
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="work_location" placeholder="Service Location" maxlength="100"> 
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
					if($e['status'] == 'show'){
					echo '
						<div class="col-md-3 ">
						</div>				
							
						<div class="col-md-8">
							<div class="col-md-3 dp">
								<img src="'; echo base_url($e['picture']); echo '" alt="">
							</div>		
								
							<div class="col-md-6" id="search_result">
								<a href="'; echo base_url('hiremetro/employee_profile').'?username='.$e['username'].'"><h3>'
								.$e['lname'].', '.$e['fname'].' '.$e['mname'].'</h3></a>
								<h4 style="color:teal;"> '.$e['work_title'].' </h4>
								<h5> '.$e['address'].' | '.$e['sex'].' | '.$dob.' yrs old </h5>
								<h6> '.$e['description'].'	</h6>
							</div>
								
							<div class="col-md-3">
							</div>
						</div>	
							
						<div class="col-md-1 ">
						</div>
						<br/>';
					}
					
				}
			?>
			
			
		</div>
				
	</div>
		
	</br>
		
	