

<body>
	<!-- Navbar -->
		
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
			<img  src="<?php echo base_url('images/logo.png')?>">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>
			<a style="color: white; margin-left: 350px; font-size: 20px;">Administrator Control Panel</a>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">		
			<ul class="nav navbar-nav navbar-right" id="navbuttons">					
				<li><a href="<?php base_url('hiremetro');?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="dropdown">
						<a href="#"  style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> ADMIN </a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('hiremetro/view_profile');?>">Profile <span style="color: black;" class="glyphicon glyphicon-user"></span></a></li>
							<li><a data-toggle="modal" data-target="#logout" style="cursor: pointer;"> Logout <span style="color: black;" class="glyphicon glyphicon-off"></span></a></li>
						</ul>
					</li>
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
					</div>
				</div>
			</div>
		</div>

	<div class="container-fluid pagee" style="background-image: url('<?php echo base_url('images/bg_admin.png')?>');">
		
		<br/>
		<br/>
		<br/>
		
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar" >
					<ul class="nav nav-sidebar">
						 <br/>
						 <li><a href="#"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-user"> Profiles</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-user"> Ratings/Reviews</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-check"> Approval</a></li>
						 <li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
						 <br/>
						 <br/>
					
						 <div class="row">
							 <div class="col-sm-1">
							 </div>
							 <div class="col-sm-10">
								<h6 style="color: white;">hiremetro © 2017 | Designed by Group 4</h6>
							 </div>
							 <div class="col-sm-1">
							 </div>
						</div>
					</ul>
				</div>
			</div>
			

			<div class="col-md-2">
			</div>
			
			<div class="col-md-10" >
				<div class="row" id="pad">
					<div class="col-md-1">
						<img  width="60px" height="60px" id="setlogo" src="<?php echo base_url('images/settings.png')?>">	
					</div>
					<div class="col-md-11">
						<h2>Settings</h2>
					</div>
				</div>
				<hr style="border: solid 2px lightgray;"/>
				
				<div class="row" style="padding-left: 40px;">
					<p style="color:black; font-size: 30px; text-decoration: bold;">Account Settings</p>
				</div>
				
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-4">
						<div class="row">
							<p style="font-size: 18px;"> Add Admin Account</p>
						</div>
						<div class="row" style="padding-left:30px;">
							<input type="text" placeholder="Username" class="form-control" style="width: 220px;"><br/>
							<input type="text" placeholder="Password" class="form-control" style="width: 220px; margin-top: -15px;" >
						</div>
						<div class="row" style="margin-bottom: 30px;">
							<button type="button" class="btn">ADD ACCOUNT</button>
						</div>
					</div>
					
				
					
					<div class="col-md-7">
						<div class="row">
							<p style="font-size: 18px;"> Manage Admin Accounts</p>
						</div>
						<div class="row" style=" padding-left:30px; padding-right:30px;">
							<div  class="table-responsive">          
								  <table class="table table-bordered text-center" >
								  
									<thead >
									  <tr>										
										<th class="text-center" style="width: 390px;">Admin Username</th>
										<th class="text-center">Action</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Sample</td>
										<td><a href="#">Update</a> | <a href="#">Delete</a></td>	
									  </tr>
									  
									</tbody>
								  </table>
							</div>

						</div>
					</div>
				</div>
				
				<hr style="border: solid 2px lightgray;"/>
				
				<div class="row" style="padding-left: 40px;">
					<p style="color:black; font-size: 30px; text-decoration: bold;">Page Settings</p>
				</div>
				<br />
				<div class="row">
					<div class="col-md-2">
					</div>
			
					<div class="col-md-8" style="padding-left:10px; padding-top: 10px; " >
							
						<button class="accordion" style="font-size:18px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/fb.ico')?>" alt=""> Facebook</button>
							<div class="panel">
								<p>Answer</p>
							</div>

						<button class="accordion" style="font-size:18px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/twitter.png')?>" alt=""> Twitter</button>
							<div class="panel">
								<p>Answer</p>
							</div>
						<button class="accordion" style="font-size:18px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/gmail.ico')?>" alt=""> Gmail</button>
							<div class="panel">
								<p>Answer</p>
							</div>
					</div>
					
						
					<div class="col-md-2 ">
					</div>
				</div>
			
			
			</div>
			
			
			
			<div class="col-md-1">
			</div>
			
	</div>
		
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
		
		
		


