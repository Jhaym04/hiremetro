
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
						 <li><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"> Profiles</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
						<li class="active" ><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench">Settings</a></li>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
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
			

			<div class="col-md-2" >
			</div>
			
			<div class="col-md-10" >
				<div class="row" id="pad">
					<div class="col-md-1">
						<img  width="60px" height="60px" id="setlogo" src="<?php echo base_url('images/suggestions.png')?>">	
					</div>
					<div class="col-md-11">
						<h2>Suggestions</h2>
					</div>
				</div>
				
				<hr style="border: solid 2px lightgray;"/>
				
				<div class="row" >
					<div class="col-md-1">
					</div>
			
				<div class="col-md-10">
						<div class="row" align="right">
							<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-save "></span> Save</button>
							<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</button>
						</div>
		
						
					<div class="row" id="padd">	
						<div class="well">
							<div class="row" >
								<div class="col-md-9">
									<h4><span class="glyphicon glyphicon-envelope"> SubjectLine</h4>
								</div>
								<div class="col-md-3" align="right">
									<h4>January 18, 2013</h4>
								</div>
							</div>
						
							<hr style="border: solid 2px #3b8686;"/>
							
							<div class="row">
								<div class="col-md-12">
									<h5>Yes Sir mga kaibigan! So ayun po ano?! Paaaaaaaaaweeeer!!</h5>
								</div>
							
							</div>
						</div>
					</div>		
					
					
				</div>
				
				
				<div class="col-md-1 ">
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
		
		 


