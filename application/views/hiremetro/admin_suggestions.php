 <div class="container-fluid" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
	
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
					<li class="active" ><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
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
						<div class="col-md-1" id="suggestionslogo">
							<img class="img-responsive" src="<?php echo base_url('images/suggestions_logo.png')?>">
						</div>
						<div class="col-md-10">
							<h1>Suggestions</h1>
						</div>
					</div>
					
					<div class="row">
					
						<div class="col-md-12" id="maindivider">
							<hr />
						</div>
					
					</div>
					
					<table class="table table-responsive table-hover">
						<thead>
						  <tr>
							<th>Subject</th>
							<th>Suggestion</th>
							<th>Date</th>
							<th>Actions</th>
						  </tr>
						</thead>
						<tbody>
						
						<?php
							if(isset($suggestions)){
										foreach($suggestions as $p){
											echo '
												<tr>
													<td>'.$p['subject'].'</td>
													<td>'.$p['content'].'</td>
													<td>'.$p['date'].'</td>
													<td><a href="';echo base_url('hiremetro/suggestions');echo'?delete=0">DELETE</a></td>
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
					  
					<div class="pagination_links"> 
                       
					</div> 
                
				</div>
				
				<div class="col-md-1">
				</div>
				
			</div>
		</div>
	</div>
	
</div>