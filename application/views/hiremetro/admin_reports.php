<div class="container-fluid pagee" style="background-image: url('<?php echo base_url('images/bg_admin.png')?>');">
	
	<br/>
	<br/>
	<br/>
	
	<div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<br/>
            <li><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"> Profiles</a></li>
            <li class="active"><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
            <li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
            <li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
			
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<?php //<p> hiremetro © 2017 | Designed by Group 4 </p>  ?>
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
									foreach($reports as $r){
										echo '
										<tr class="info">
										<td>'.$r['name'].'</td>
										<td>'.$r['work_title'].'</td>
										<td>'.$r['num_reports'].'</td>
										<td>
											<a href="'; echo base_url('hiremetro/admin_reports'); echo'?id='.$r['employee_id'].'&view=0">View</a> |
											<a href="'; echo base_url('hiremetro/admin_reports'); echo'?id='.$r['employee_id'].'&delete=0">Delete</a>
										</td>
										</tr>';
									};
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
														<h4 class="card-title">'.$m['report_subject'].'</h4>
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