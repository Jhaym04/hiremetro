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
					<div class="col-md-2">
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
				<div class="col-md-2">
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
				
				<p id="p"><b>Elvin Marin</b> hired you | <a href="#">View request</a>
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
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
				
				<p id="p">You rated your employee <b>Celine Macaraeg</b> 3 out of 5 stars | <a href="#">View rate</a>
				<p class="small text-right"> 09-17-17 | 2:00 pm </p>
			</div>
		  </div>
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

		<div id="Transactions" class="tabcontent">
			<div class="row">
				<h3 style="padding-left: 15px;"> Most Recent Transaction </h3>
			</div>
		  
			<div class="row" style="padding: 0px 50px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name of Client</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>sample name</td>
							<td>sample date</td>
						</tr>
					</tbody>
				</table>
			</div>
		  
			<div class="row">
				<h3 style="padding-left: 15px;"> Previous Transactions </h3>
			</div>
			
			<div class="row" style="padding: 0px 50px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name of Client</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>sample name</td>
							<td>sample date</td>
						</tr>
						<tr>
							<td>sample name</td>
							<td>sample date</td>
						</tr>
						<tr>
							<td>sample name</td>
							<td>sample date</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		
		<div id="AccountSettings" class="tabcontent" style="padding-top:20px; padding-bottom:20px;">
			<div class="row">
				<div class="col-md-1">
				</div>
			
				<div class="col-md-2">
					<p><b>Profile Picture:  </p></b>
				</div>
				<div class="col-md-7">
					<input type="file"  /><br>
				</div>
				<div class="col-md-1">
				</div>
			</div>

			
			<div class="row">
				<div class="col-md-1">
				</div>
			
				<div class="col-md-2">
					<p><b>Change E-mail:  </p></b>
				</div>
				<div class="col-md-7">
					<input type="text" placeholder="New E-mail" class="form-control" >
				</div>
				<div class="col-md-1">
				</div>
			</div>
			
			<br />
			
			<div class="row">
				<div class="col-md-1">
				</div>
			
				<div class="col-md-2">
					<p><b>Change Name:  </p></b>
				</div>
				<div class="col-md-3">
					<input type="text" placeholder="First name" class="form-control" >
				</div>
				<div class="col-md-3">
					<input type="text" placeholder="Last name" class="form-control" >
				</div>
				<div class="col-md-1">
				</div>
			</div>
			
			<br/>
			
			<div class="row">
				<div class="row">
					<div class="col-md-1">
					</div>
				
					<div class="col-md-3">
						<p><b>Change Password:  </p></b>
					</div>
					
					<div class="col-md-8">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-7" style="padding-left: 23px;">
						<input type="text" placeholder="New password" class="form-control" style="width: 190px;"><br/>
						<input type="text" placeholder="Confirm password" class="form-control" style="width: 190px;" >
					</div>
					<div class="col-md-2">
					</div>
				
					
					
				</div>
			</div>
			
			<br />
			
			<div class="row">
				<div class="row">
					<div class="col-md-1">
					</div>
				
					<div class="col-md-3">
						<p><b>Change Contact No.:  </p></b>
					</div>
					
					<div class="col-md-8">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-7" style="padding-left: 23px;">
						<input type="text" placeholder="New mobile number" class="form-control" style="width: 190px;"><br/>
						
					</div>
				
					
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-right">
					<button type="button" class="btn btn-primary" >Save Changes</button>
				</div>
			</div>
		</div>
		
		<div id="Notifications" class="tabcontent">
		  <div class="row" id="unread" style="padding: 10px 50px;">
			<p id="request" > <b>Elvin C. Marin</b> sent you a hire request | <a href="#"> View Request </a> </p>
			<p style="float: right;"> 09-28-17 | 2:09pm </p>
		  </div>
		  
		  <div class="row" id="unread" style="padding: 10px 50px;">
			<p > <b>Celine Q. Macaraeg</b> posted a review on you | <a href="#"> View Rate </a> </p>
			<p style="float: right;"> 09-28-17 | 2:09pm </p>
		  </div>
		  
		  <div class="row" style="padding: 10px 50px;">
			<p id="request" > <b>Elvin C. Marin</b> sent you a hire request | <a href="#"> View Request </a> </p>
			<p style="float: right;"> 09-28-17 | 2:09pm </p>
		  </div>
		  
		  <div class="row" style="padding: 10px 50px;">
			<p > <b>Celine Q. Macaraeg</b> rated you 4 out of 5 stars as a laborer | <a href="#"> View Rate </a> </p>
			<p style="float: right;"> 09-28-17 | 2:09pm </p>
		  </div>
		  
		  <div class="row" style="padding: 10px 50px;">
			<p > <b>Celine Q. Macaraeg</b> posted a review on you | <a href="#"> View Rate </a> </p>
			<p style="float: right;"> 09-28-17 | 2:09pm </p>
		  </div>
		</div>
		
		<div id="Reviews" class="tabcontent">
			<div class="row" style="padding-top:10px;">
				<div class="col-md-2">
					<p style="padding-left:15px;">Sort by:</p>
				</div>
				<div class="col-md-10">
					<select class="form-control" style="width: 150px;" >
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
					</select>
				</div>
			</div>
		
			<br />
			<div class="row">
				<div class="col-md-6">
					<p style="padding-left:15px;">Total Ratings (as employee): </p>
					<div class="col-md-2">
						<h1>4.8</h1>
					</div>
				
					<div class="col-md-5">	
						<div id="star" class="text-center">
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span>&#9733;</span>
							<span>&#9733;</span>
							<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( 2,343 rates )</h6>
						</div>
					</div>
					
					<div class="col-md-3">
						<ul class="bargraph" style="margin-left:-20px;">
							<li class="five"></li>
							<li class="four"></li>
							<li class="three"></li>
							<li class="two"></li>
							<li class="one"></li>
							</ul>
					</div>
					<div class="col-md-2"> </div>
				</div>
				<div class="col-md-6">
					<p style="padding-left:15px;">Total Ratings (as laborer): </p>
					<div class="col-md-2">
						<h1>4.8</h1>
					</div>
					
					<div class="col-md-5">	
						<div id="star" class="text-center">
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span>&#9733;</span>
							<span>&#9733;</span>
							<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( 2,343 rates )</h6>
						</div>
					</div>
					<div class="col-md-3">
						<ul class="bargraph" style="margin-left:-20px;">
							<li class="five"></li>
							<li class="four"></li>
							<li class="three"></li>
							<li class="two"></li>
							<li class="one"></li>
							</ul>
					</div>
					<div class="col-md-2"> </div>
				</div>
			</div>
		  
		  <hr style="border: solid 1px gray;"/>
		  
			
				<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">

							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>Celine Joy Macaraeg<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
					
							<div class="row" style="padding-left: 10px;">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							
							<div class="row">
								<p class=" small text-right" style="padding-right: 10px;"> 09-17-17 | 2:00 pm </p>
							</div>
						</div>
						<div class="col-md-1 ">
						</div>
				</div>
				
			
			
			<hr style="border: solid 1px lightgray;"/>
			
			
				<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">

							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>Celine Joy Macaraeg<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
					
							<div class="row" style="padding-left: 10px;">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							
							<div class="row">
								<p class=" small text-right" style="padding-right: 10px;"> 09-17-17 | 2:00 pm </p>
							</div>
						</div>
						<div class="col-md-1 ">
						</div>
				</div>
				
			
			
			<hr style="border: solid 1px lightgray;"/>
			
			
				<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-10">

							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>Celine Joy Macaraeg<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
					
							<div class="row" style="padding-left: 10px;">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							
							<div class="row">
								<p class=" small text-right" style="padding-right: 10px;"> 09-17-17 | 2:00 pm </p>
							</div>
						</div>
						<div class="col-md-1 ">
						</div>
				</div>
				
			
			
			

		</div>
			

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
		
