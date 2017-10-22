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
    padding: 15px;
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
  margin-left: -25px;
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
						 <li class="active"><a href="#"><span class="glyphicon glyphicon-check"> Page Settings</a></li>
						 <li><a href="#"><span class="glyphicon glyphicon-wrench"> Account Settings</a></li>
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
						<h2>Page Settings</h2>
					</div>
				</div>
				
				<hr style="border: solid 2px lightgray;"/>
				
				<div class="row" style="padding-left: 40px;">
					<p style="color:black; font-size: 30px; text-decoration: bold;">Social Accounts</p>
				</div>
				<br />
				<div class="row">
					<div class="col-md-2">
					</div>
			
					<div class="col-md-8" style="padding-left:10px; padding-top: 10px; " >
							
						<button class="accordion" style="font-size:20px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/fb.ico')?>" alt=""> Facebook</button>
							<div class="panel">
								<p>Answer</p>
							</div>

						<button class="accordion" style="font-size:20px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/twitter.png')?>" alt=""> Twitter</button>
							<div class="panel">
								<p>Answer</p>
							</div>
						<button class="accordion" style="font-size:20px;" ><img style="width: 40px; height: 40px;" src="<?php echo base_url('images/gmail.ico')?>" alt=""> Gmail</button>
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
		
		
		


