 <div class="container-fluid">
	
	<br/>
	<br/>
	<br/>
	
	<div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<br/>
            <li><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_profiles')?>"><span class="glyphicon glyphicon-user"> Profiles</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
						<li class="active"><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
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
				<div class="col-sm-10" id="smallfooter">
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
							
							foreach($users as $value) 
							{ 
								if($value['viewed']==1)
								{
									echo '<tr class="active">';
								}
								else
									echo '<tr class="info">';
								
								echo '<td>'; 
								echo $value['subject']; 
                                echo '</td>';    
                                
								echo '<td>'; 
								echo $value['suggestion']; 
                                echo '</td>';
								
								echo '<td>'; 
								echo $value['date']; 
                                echo '</td>';
								
								echo '<td id="view_hover">'; 
							
									echo '<a href="'; echo base_url('hiremetro/admin_message').'?id='.$value['suggestion_id'].'">';
									echo 'View'; 
									echo '</a>'	;			
									
									echo ' | ';
								
									echo '<a href="'; echo base_url('hiremetro/admin_suggestions').'?id='.$value['suggestion_id'].'&delete=0;">';
									echo 'Delete'; 
									echo '</a>';
								
                                echo '</td>';
								
								echo '</tr>';
							}  
							
							?> 
							
						</tbody>
					</table>
					  
					<div class="pagination_links"> 
                        <?php echo $links; ?> 
					</div> 
                
				</div>
				
				<div class="col-md-1">
				</div>
				
			</div>
		</div>
	</div>
	
</div>