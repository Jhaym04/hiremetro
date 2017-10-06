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
				<li><a href="#"><span class="glyphicon glyphicon-user"  ></span> Account </a></li>
				<li><a href="#" style="margin-right: 20px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " id="jobs">
				
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
						<h2>Lei Dian Mendoza</h2>
						<h4><span class="glyphicon glyphicon-envelope"></span> ldtm17@gmail.com</p>
						<h4><span class="glyphicon glyphicon-map-marker red"></span> Dasmarinas, Cavite</p>
						<h4><span class="glyphicon glyphicon-phone"></span> 09367935476</p>	
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
			
			</div>
			
			<div class="col-md-1">
			</div>			
		
		</div>
		
		<br/ >
		
		<div class="row">
		
			<div class="col-md-2 ">
			</div>
			
			<div class="col-md-8">
				
				<button class="accordion"  >View Employers</button>
					<div class="panel">
					  <p>Insert text</p>
					</div>

				<button class="accordion"  >Manage Ads</button>
					<div class="panel">
					  <p>Insert text</p>
					</div>

				<button class="accordion" >Notification Settings</button>
					<div class="panel">
					  <p>Insert text</p>
					</div>

				<button class="accordion" >Account Settings</button>
					<div class="panel" >
					  <p>Insert text</p>
					</div>
					
				<button class="accordion" id="red" >Deactivate</button>
				<div class="panel" >
					<p>Insert text</p>
					</div>
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