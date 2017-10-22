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
				<li><a href="#"><span class="glyphicon glyphicon-home"  ></span> Home </a></li>
				<li><a href="#"><span class="glyphicon glyphicon-bell"  ></span></a></li>
				<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 10px;"><span class="glyphicon glyphicon-user"></span> Account Name <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
				    <div class="row">
					<li class="col-sm-4">
						<ul>
							<img style="border: 1px solid black; border-radius:50px;" src="images/default.png" width="100px" height="100px" />
							
							
						</ul>
					</li>
					<li class="col-sm-8">
						<ul>
							<h4><a href="#" >Lei Dian Mendoza</h4>
							<a href="#" >lei.mendoza@gmail.com</a>
							
							
							<br />
							<br />
							<button class="btn" style="background-color: #3b8686;">My Account</button>
							
							
						</ul>
					</li>
					</div>
					
					<hr>
					
					<div class="row text-right">
						<div class="col-md-8">
							
						</div>
						<div class="col-md-3">
							<button  type="button" class="btn btn-danger" id="padds"> Sign Out </button>
						</div>
						<div class="col-md-1">
						</div>
					</div>
					
					
					
				</ul>
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
					
					<div class="col-md-5" >
						<h2>Lei Dian Mendoza</h2>
						<h4><span class="glyphicon glyphicon-envelope"></span> ldtm17@gmail.com</p>
						<h4><span class="glyphicon glyphicon-map-marker red"></span> Dasmarinas, Cavite</p>
						<h4><span class="glyphicon glyphicon-phone"></span> 09367935476</p>	
					</div>
					
					<div class="col-md-1">		
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
				<div class="tab">
				  <button class="tablinks" onclick="openTab(event, 'MyProfile')">My Profile</button>
				  <button class="tablinks" onclick="openTab(event, 'ManageAds')">Create/Manage Ads</button>
				  <button class="tablinks" onclick="openTab(event, 'Transactions')">Transactions</button>
				  <button class="tablinks" onclick="openTab(event, 'AccountSettings')">Account Settings</button>
				  <button class="tablinks" onclick="openTab(event, 'Notifications')">Notifications</button>
				  <button class="tablinks" onclick="openTab(event, 'Reviews')">Reviews</button>
				</div>

				<div id="MyProfile" class="tabcontent">
				  <div class="row text-center">
					<h4>Welcome, Lei Dian</h4>
				  </div>
				  
				  <div class="row">
						<div class="col-md-6">
							<div class="row" id="padding1">
								<p><b>Total Ratings (as employee):</b></p>
							</div>
							<div class="row">
								<div class="col-md-2 text-center">
									<h1>4.8</h1>
								</div>
								<div class="col-md-4">
								
										<div id="star" class="text-center">
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( 2,343 rates )</h6>
										</div>
								</div>
								<div class="col-md-6">
									<ul class="bargraph">
										<li class="five"></li>
										<li class="four"></li>
										<li class="three"></li>
										<li class="two"></li>
										<li class="one"></li>
									</ul>
								</div>
							</div>
							
							<div class="row" id="padding1">
								<p><b>Total Ratings (as laborer):</b></p>
							</div>
							
							<div class="row">
								<div class="col-md-2 text-center">
									<h1>4.8</h1>
								</div>
								<div class="col-md-4">
								
										<div id="star" class="text-center">
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( 2,343 rates )</h6>
										</div>
								</div>
								<div class="col-md-6">
									<ul class="bargraph">
										<li class="five"></li>
										<li class="four"></li>
										<li class="three"></li>
										<li class="two"></li>
										<li class="one"></li>
									</ul>
								</div>
							</div>
							
							<br />
							
							<hr style="border: solid 1px lightgray;"/>
							
							<div class="row" id="padding1">
								<p><b>Activity Notifications:</b></p>
							</div>
							
							<p id="p"><b>Elvin Marin</b> hired you | <a href="#">View request</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							<p id="p"><b>Elvin Marin</b> rated you 4 out of 5 stars | <a href="#">View rate</a>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							<p id="p"><b>Elvin Marin</b> posted a review on you | <a href="#">View review</a>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<div class="col-md-3">
							</div>
							<div class="col-md-6" >
								<a href="#" class="text-center"> See all notifications </a>
							</div>
							<div class="col-md-3">
							</div>
						</div>
						
						<br />
						<div class="col-md-6" id="padding">

							<p><b>Activity Log:</b></p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
							
							<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a></p>
							<p class="small text-right"> 09-17-17 | 2:00 pm </p>
						</div>
					  </div>
					</div>

				

			</div>
			<div class="col-md-2 ">
			</div>
		</div>		


		<script>
			function openTab(evt, name) {
				// Declare all variables
				var i, tabcontent, tablinks;

				// Get all elements with class="tabcontent" and hide them
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}

				// Get all elements with class="tablinks" and remove the class "active"
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}

				// Show the current tab, and add an "active" class to the button that opened the tab
				document.getElementById(name).style.display = "block";
				evt.currentTarget.className += " active";
			}
		</script>

		<br /> <br /> <br /> <br /> <br /> <br /> <br />
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
			<div class="col-lg-3 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt=""> facebook.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			
			
		</div>
	</div>
		