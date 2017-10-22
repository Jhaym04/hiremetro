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
					<li class="active" ><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
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
	
	<div class="row" style="background-image: url('<?php echo base_url('images/bg.png');?>'); min-height: 50%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">

		<div class="col-md-2">
		</div>
		<div class="col-md-10" >
			<div class="row">
				<div class="col-md-11">
					<br />
					<div class="row">
						<div class="col-md-1">
							<img class="img-responsive" src="<?php echo base_url('images/reports_logo.png')?>" style="opacity:0.75;" >
						</div>
						<div class="col-md-10">
							<h1>Reports</h1>
						</div>
					</div>
					
					<hr style="border: solid 2px black; opacity:0.50;"/>
					
					<div class="row">
						<div class="col-md-6">
							<table class="table table-responsive table-hover">
								<thead>
								  <tr>
									<th>Name</th>
									<th>Occupation</th>
									<th># of Reports</th>
									<th>Actions</th>
								  </tr>
								</thead>
								<tbody>
									<?php
										if(isset($reports)){
											foreach($reports as $r){
												echo'
													<tr>
														<td>'.$r['name'].'</td>
														<td>'.$r['work_title'].'</td>
														<td>'.$r['num_reports'].'</td>
														<td><a href="';echo base_url('hiremetro/admin_reports');echo'?id='.$r['employee_id'].'&view=0">VIEW</a></td>
													</tr>
												';
											}
										}
									?>						  
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table table-responsive table-hover">
								<thead>
								  <tr>
									<th>Reports</th>
									</tr>
								</thead>
								<tbody>
								<?php
									if(isset($_GET['id'])){
									foreach($message as $m){
										echo '
										<tr>
											<td>
												<div class="card">
													<div class="card-block px-3">
														<p class="card-text">'.$m['report_date'].'</p>
														<p class="card-text">'.$m['report_body'].'</p>
													</div>
												</div>
											</td>
										</tr>';
									};
									};
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