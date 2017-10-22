

<div class="container-fluid" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
	
	<br/>
	<br/>
	<br/>
	
	<div class="row">
        <div class="col-sm-3 col-md-2 sidebar" >
		  <br />
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
					<li class="active" ><a href="<?php echo base_url('hiremetro/admin_profiles')?>"><span class="glyphicon glyphicon-user"> Profiles</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_reviews')?>"><span class="glyphicon glyphicon-book"> Reviews </a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_approval')?>"><span class="glyphicon glyphicon-check"> Approval</a></li>
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
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-10" >
			<div class="row">
				<div class="col-md-11">
					<br />
					<div class="row">
						<div class="col-md-1">
							<img class="img-responsive" src="<?php echo base_url('images/profile.png')?>" style="opacity:0.75;" >
						</div>
						<div class="col-md-10">
							<h1>Profiles</h1>
								<div class="row text-center" >
									<div class="col-xs-4 text-center" style="margin-left: 300px;">
									<form action="<?php echo base_url('hiremetro/admin_profiles')?>" method="post">
									
									</form>
									</div>
								</div>
							</form>
							<form action="<?php echo base_url('hiremetro/admin_profiles')?>" method="get" class="form-horizontal">
								<div class="form-group">
									<div class="col-xs-4 text-center" style="margin-left: 300px;">
										SEARCH & SORT by Work Title: 
										<input type="text" name="search" placeholder="Search" class="form-control">
										<select class="form-control" id="sel1" name="category">
												<option>All</option>
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
										<br/>
										<button type="submit" style="background-color: teal; color: white;">SUBMIT</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<hr style="border: solid 2px black; opacity:0.50;"/>
					
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped">
								<thead>
								  <tr class="success">
									<th>Name</th>
									<th>Address</th>
									<th>Occupation</th>
									<th>Contact No.</th>
									<th>Action</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										if(!empty($profiles[0]['name'])){
										foreach($profiles as $p){
											echo '
												<tr>
													<td>'.$p['name'].'</td>
													<td>'.$p['location'].'</td>
													<td>'.$p['category'].'</td>
													<td>'.$p['contact'].'</td>
													<td>VIEW | SUSPEND</td>
												</tr>
											';
										}
										}
										else{
											echo '<tr>
													<td></td>
													<td></td>
													<td>NO RESULTS FOUND</td>
													<td></td>
													<td></td>
												</tr>';
										}
									?>
													  
								</tbody>
							</table>
						</div>
					</div>
					
					<br />
					<br />
				</div>
				
				<div class="col-md-1">
				</div>
				
			</div>
		</div>
	</div>
	
	
	
</div>