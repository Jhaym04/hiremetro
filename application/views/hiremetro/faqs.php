<!--faq-->


<nav class="navbar navbar-custom navbar-fixed-top">
		<div >
				<center><img class="center" src="<?php echo base_url('images/logo.png')?>" ></center>
				<!-- <center><img class="faqc" id="faqs" src="<?php echo base_url('images/faqs.png')?>" ></center>-->
				<div class="navbar-header" id="logo" >
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"">
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
				
		</div>	
		

	</nav>

<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">

	
	<div class="row text-center" id="faqs">
		<img src="<?php echo base_url('images/faqs.png')?>">
	</div>


	<div class="row" id="acc">
		
			<div class="col-md-2 ">
			</div>
			
			<div class="col-md-8">
				
			
				<div class="col-md-6">	
					<button class="accordion"  >What is Hire Metro?</button>
						<div class="panel">
						  <p>Hiremetro  is a website where  connects the customer to  employer in an easiest and convenient 
						  way and by posting an add through their mobile phone or web.</p>
						</div>

					<button class="accordion"  >How do I find employees?</button>
						<div class="panel">
						  <p>Using the search bar and inputting the kind of work, this will redirect you to the 
						  employer related to the kind of service you needed.</p>
						</div>
					<button class="accordion"  >How will I know if the Employer is legit?</button>
						<div class="panel">
						  <p>By clicking the profile ad of the employee there is a button which you can download 
						  the resume as well as the credentials of the employe</p>
						</div>
					<button class="accordion" >Is there a cost for being placed with HireMetro?</button>
						<div class="panel">
						  <p>No. HireMetro works on your behalf to locate your customer at no cost to you. To get started, create your account. </p>
						</div>
				</div>
			
				<div class="col-md-6">

					<button class="accordion" >How do i contact my clients and customers?</button>
						<div class="panel">
						  <p>Your profile must have a contact number and interested clients can also reach you through the message button.</p>
						</div>

					<button class="accordion" >Is it neccesary to post credentials and resume?</button>
						<div class="panel" >
						  <p>Yes, to verify your personal work experience and expertise.</p>
						</div>
					<button class="accordion" >Why was my ad removed?</button>
						<div class="panel" >
						  <p>Your ad was removed because it was been reported or  its an ad for prohibited service.</p>
						</div>
					<button class="accordion" >How do I edit my account?</button>
						<div class="panel" >
						  <p>You have to Log-In to your HireMetro account,there, you can edit your personal information  and update the content of your ad</p>
						</div>
				</div>	
				<div class="col-md-1 ">
			</div>
				
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