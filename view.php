 <style>




div { font-family: montserrat; }


.pagee{
	background-image: url('images/bg.png');
	
	/* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.affix {
      top: 0;
      width: 100%;
	  z-index: 10;
 }
 
  .navbar-custom {
    background-color:#3b8686;
    color: white;
    border-radius:0;
}

.navbar-custom .navbar-nav > li > a {
    color: white;
}

.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
    color: black;
	background-color: transparent;
}

#logo img {
	
	height: 40px;
	margin: 5px;
	margin-left: 20px;
	
}

#logo span{
	background-color: white;



}




button.accordion {

    background-color: #eee;
    color: black;
    cursor: pointer;
    padding-left: 15px;
    padding-top: 10px;	
    padding-bottom: 10px;	
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	margin-top: -10px;
}

button.accordion.active, button.accordion:hover {
    background-color: #3b8686;
	color:white;
}

button.accordion:after {
    content: '\23f5';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\23f7";
}



div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.2s ease-in-out;
}



#acc { 
	padding-top: 30px;
	padding-left: 3px;
	padding-bottom: 3px;
}

#left {
	padding-left: 250px;
}



#pad {
	padding-top: 10px;
}

#setlogo {
	opacity: 0.25;
}


@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 30px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 18px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #3b8686;
    border-right: 1px solid #eee;
	font-size: 20px;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -19px;
}
.nav-sidebar > li > a {
  padding-right: 5px;
  padding-left: 20px;
  color: white;
  -webkit-transition: color 0.5s;
}

.nav-sidebar > li > a:hover{
	 background-color: transparent;
	 color: black;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #000000;
  background-color: transparent;
  font-size: 20px;
}

.nav-sidebar > p{
	padding-left: 10px;
	color: white;
}

.btn {
	height: 30px;
	width: 150px;
	font-size: 15px;
	margin-left: 65px;
	margin-top: 15px;
	margin-right: 15px;
	color: white;
	background-color: #3b8686;
	border-radius: 5px;
}



</style>

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
			<a style="color: white; margin-left: 50px; font-size: 20px;">Administrator Control Panel</a>
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

	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		
		<br/>
		<br/>
		<br/>
		
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar" >
				  <br/>
				  <ul class="nav nav-sidebar">
					<div class="navbar-header" id="logo"  >
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
							<span class="icon-bar" style="background-color:#3b8686"></span>
							<span class="icon-bar" style="background-color:#3b8686"></span>
							<span class="icon-bar" style="background-color:#3b8686"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar2">
						<ul class="nav nav-sidebar" id="navbuttons" style="background-color:#3b8686">
							<li><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
							<li><a href="<?php echo base_url('hiremetro/admin_profiles')?>"><span class="glyphicon glyphicon-user"> Profiles</a></li>
							<li><a href="<?php echo base_url('hiremetro/admin_reviews')?>"><span class="glyphicon glyphicon-book"> Reviews </a></li>
							<li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
							<li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
							<li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
							<li class="active" ><a href="<?php echo base_url('hiremetro/admin_approval')?>"><span class="glyphicon glyphicon-check"> Approval</a></li>
						</ul>
					</div>
					<br/>
					<br/>
					<br/>
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-10">
							<h6>hiremetro © 2017 | Designed by Group 4</h6>
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
						<h2>Approval</h2>
					</div>
				</div>
				<hr style="border: solid 2px lightgray;"/>
				
				
				
				<div class="row">
					
					<div class="col-md-5">
						<div class="row text-center">
							<p style="font-size: 25px;"> Approve Advertisement</p>
						</div>
						<div class="row" style=" padding-left:30px; padding-right:10px;">
							<div  class="table-responsive">          
								  <table class="table table-bordered text-center" ">
								  
									<thead >
									  <tr>										
										<th class="text-center" style="max-width: 300px;">Name</th>
										<th class="text-center">Action</th>
									  </tr>
									</thead>
									<tbody>
										<?php
										$counter = 0;
										$cnt = 0;
											foreach((array)$aprlist as $e)
												{
													echo '<tr><td>';
														//palabasin nalang names
													echo '</td>';
													echo '<td>';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&view=0;">';
														echo 'View'; 
														echo '</a>';
														echo ' | ';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&approve=0;">';
														echo 'Approve'; 
														echo '</a>';
														echo ' | ';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&decline=0;">';
														echo 'Decline'; 
														echo '</a>';
														
													echo '</td></tr>';					
												}
										?>
									</tbody>
								  </table>
							</div>
						</div>
				</div>	
				
					
					<div class="col-md-7">
						<div class="row text-center">
							<p style="font-size: 25px;"> Approve Profile Pictures</p>
						</div>
						<div class="row" style=" padding-left:30px; padding-right:10px;">
							<div  class="table-responsive">          
								  <table class="table table-bordered text-center" >
								  
									<thead >
									  <tr>										
										<th class="text-center" style="width: 200px;">Name</th>
										<th class="text-center">Picture</th>
										<th class="text-center">Action</th>
									  </tr>
									</thead>
									<tbody>
										<?php
										$counter = 0;
										$cnt = 0;
											foreach((array)$aprlist2 as $e)
												{
													echo '<tr><td>';
														//palabasin nalang names
													echo '</td><td>';
														//palabasin nalang pic
													echo '</td>';
													echo '<td>';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&view=0;">';
														echo 'View'; 
														echo '</a>';
														echo ' | ';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&approvepic=0;">';
														echo 'Approve'; 
														echo '</a>';
														echo ' | ';
														echo '<a href="'; echo base_url('hiremetro/admin_approval').'?id='.$e['client_id'].'&declinepic=0;">';
														echo 'Decline'; 
														echo '</a>';
														
													echo '</td></tr>';					
												}
										?>
									  
									</tbody>
								  </table>
							</div>
						</div>
					</div>
				</div>
				
				
				
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
		
		
		


