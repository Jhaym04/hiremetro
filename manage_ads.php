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

				<div id="ManageAds" class="tabcontent">
					<div class="row" style="padding-top:10px;">
							<div class="col-md-6">
								<div class="row" style="padding-left: 15px;">
									<p><b>Work Rate: </p></b>
								
									<div class="col-md-1">
									</div>
									<div class="col-md-5">
										<div class="row" style="padding-left: 15px;">
											<input class=" form-control" type="number" min="0" max="100000" step="1" style=" padding-left: 10px; width: 145px; height:33px; border-radius: 5px;" ><br>
											 
										</div>
										<div class="row" style="padding-top: 0px; padding-left: 15px;">
										<input type="checkbox"  >Negotiable<br>
										</div>
									</div>
									<div class="col-md-5">
										<div>
												
												  <select class="form-control" >
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												  </select>
										</div>
									</div>
									<div class="col-md-1">
									</div>
								</div>
								<br />
								<br />
								
								<div class="row" style="padding-left: 15px;">
									<p><b>Type of Job: </p></b>
									
									<div class="col-md-1">
									</div>
									<div class="col-md-10">
									
										<div >
											
											  <select class="form-control" style="width: 290px;" >
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											  </select>
										</div>
									</div>
									<div class="col-md-1">
									</div>
								</div>	
							</div>
							
							<div class="col-md-6"> 
								<div class="row">
								<p><b>Location: </p></b>
									
									<div class="col-md-1">
									</div>
									<div class="col-md-10">
									
										<div >
											
											  <select class="form-control" style="width: 290px;" >
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
											  </select>
										</div>
									</div>
									<div class="col-md-1">
									</div>
								</div>
								
								<br />
								
								<div class="row">
									<p><b>Profile Picture </p></b>
									
									<div class="col-md-1">
									</div>
									<div class="col-md-10">
									
										<div >
											
											  <input type="file"  /><br>
										</div>
									</div>
									<div class="col-md-1">
									</div>
								</div>
								
								<br />
								
								<div class="row">
									<p><b>Profile Picture </p></b>
									
									<div class="col-md-1">
									</div>
									<div class="col-md-10">
									
										<div >
											
											 <input type="file"  /><br>
										</div>
									</div>
									<div class="col-md-1">
									</div>
								</div>
							</div>
					</div>
						
						<div class="row" style="padding-left: 15px;">
							<p><b>Job Description</p></b>
								
								<div class="col-md-1">
								</div>
								<div class="col-md-10">
								
									<div >
										<textarea placeholder="Description" style="width: 100%;height: 70px;padding: 10px 10px;box-sizing: border-box;border: 2px solid #ddd;border-radius: 5px;
										background-color: white; font-size: 15px;resize: none;"></textarea>
									</div>
								</div>
								<div class="col-md-1">
								</div>
							<button type="button" class="update">Update</button>
						</div>
						<br />
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
		