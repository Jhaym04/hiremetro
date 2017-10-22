<!-- profile -->
	
	<!-- Navbar -->
	
	<?php
		if ($this->session->flashdata('errors')){
			echo "<script> 
			 $(window).on('load',function(){
				$('#form_error').modal('show');
			});
		</script>";
		}
	?>
	
	<?php
		if ($this->session->flashdata('aname')){
			echo "<script> 
			 $(window).on('load',function(){
				$('#contact_details').modal('show');
			});
		</script>";
		}
	?>
	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " id="jobs">
				
				<br /> <br /> 			
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-3 text-center dp">
						<img src="<?php echo base_url($client_information['picture'])?>" alt="">
						<?php
							if(isset($work_details)){
								echo '<h4 style ="color:teal;">'.$work_details['category'].'</h4>';
							}else{
								echo '<br/>';
								echo '<br/>';
								echo '<br/>';
							}
						?>
						<br /> <br />					
					</div>
					
					<div class="col-md-5" >
						<h2><?php echo $this->session->userdata('name');?></h2>
						<h4><span class="glyphicon glyphicon-envelope"></span> <?php echo $email?></p>
						
						<?php
							
							if(isset($work_details)){
								echo '
								<h4><span class="glyphicon glyphicon-map-marker red"></span> '.$client_information['location'].'</p>
								<h4><span class="glyphicon glyphicon-phone"></span> '.$client_information['contact'].'</p>';	
							}
						?>
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
			<?php
							if(!isset($work_details)){
								echo '
									<div class="w3-panel w3-teal text-center">
									  <h6>Want to create your own ad ? Click Manage Ads to create one!</h6>
									</div> 
								';
							}
						?>
				<div class="tab">
		  <button class="tablinks" onclick="openTab(event, 'MyProfile')">My Profile</button>
		  <button id="manage_ads" class="tablinks" onclick="openTab(event, 'ManageAds')">Manage Ads</button>
		  <button class="tablinks" onclick="openTab(event, 'Transactions')">Transactions</button>
		  <button class="tablinks" onclick="openTab(event, 'AccountSettings')">Account Settings</button>
		  <button class="tablinks" onclick="openTab(event, 'Notifications')">Notifications</button>
		  <button class="tablinks" onclick="openTab(event, 'Reviews')">Reviews</button>
		</div>

		<div id="MyProfile" class="tabcontent">
		  <div class="row text-center">
			<h4>Welcome, <?php echo $client_information['fname']?></h4>
		  </div>
		  
		  <div class="row">
			<div class="col-md-6">
				<?php
				
					if(isset($work_details)){
						
						echo '
						<div class="row" id="padding1">
							<p><b>Total Ratings (as employee):</b></p>
						</div>
						<div class="row">
							<div class="col-md-2">
								<h1>';echo number_format((float)$rating_c['total_rating'], 1, '.', '');echo'</h1>
							</div>
							<div class="col-md-4">
							<div id="star" class="text-center">
							';
								$total = (int)$rating['total_rating'];
								
									if($total == 5){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>';
										}
										elseif($total == 4){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 3){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 2){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 1){
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
							
							echo '
							<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( '.$rating['no_of_rates'].' rates )</h6>
							</div>
							</div>
							<div class="col-md-6">
								<ul class="bargraph">';
								
								if($rating['1_star'] == 0){
									$one = "0%";
								}else{
									$one = ($rating['1_star']/$rating['no_of_rates'])*100;
									$one = $one.'%';
								}
								
								if($rating['2_star'] == 0){
									$two = "0%";
								}else{
									$two = ($rating['2_star']/$rating['no_of_rates'])*100;
									$two = $two.'%';
								}
								
								if($rating['3_star'] == 0){
									$three = "0%";
								}else{
									$three = ($rating['3_star']/$rating['no_of_rates'])*100;
									$three = $three.'%';
								}
								
								if($rating['4_star'] == 0){
									$four = "0%";
								}else{
									$four = ($rating['4_star']/$rating['no_of_rates'])*100;
									$four = $four.'%';
								}
								
								if($rating['5_star'] == 0){
									$five = "0%";
								}else{
									$five = ($rating['5_star']/$rating['no_of_rates'])*100;
									$five = $five.'%';
								}
								
								echo'
									<li class="five" style="width:'.$five.'"></li>
									<li class="four" style="width:'.$four.'"></li>
									<li class="three" style="width:'.$three.'"></li>
									<li class="two" style="width:'.$two.'"></li>
									<li class="one" style="width:'.$one.'"></li>
								</ul>
							</div>
						</div>';
					}
				?>
				
				<?php
				
				echo '
					<div class="row" id="padding1">
						<p><b>Total Ratings (as customer):</b></p>
					</div>
					<div class="row">
					<div class="col-md-2">
							<h1>';echo number_format((float)$rating_c['total_rating'], 1, '.', '');echo'</h1>
						</div>
						<div class="col-md-4">
						
								<div id="star" class="text-center">';
								
								$total = (int)$rating_c['total_rating'];
								
									if($total == 5){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>';
										}
										elseif($total == 4){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 3){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 2){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 1){
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
								
									
									echo '<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( '.$rating_c['no_of_rates'].' rates )</h6>
								</div>
						</div>
						<div class="col-md-6">
							<ul class="bargraph">';
							
								if($rating_c['1_star'] == 0){
									$one = "0%";
								}else{
									$one = ($rating['1_star']/$rating['no_of_rates'])*100;
									$one = $one.'%';
								}
								
								if($rating_c['2_star'] == 0){
									$two = "0%";
								}else{
									$two = ($rating['2_star']/$rating['no_of_rates'])*100;
									$two = $two.'%';
								}
								
								if($rating_c['3_star'] == 0){
									$three = "0%";
								}else{
									$three = ($rating['3_star']/$rating['no_of_rates'])*100;
									$three = $three.'%';
								}
								
								if($rating_c['4_star'] == 0){
									$four = "0%";
								}else{
									$four = ($rating['4_star']/$rating['no_of_rates'])*100;
									$four = $four.'%';
								}
								
								if($rating_c['5_star'] == 0){
									$five = "0%";
								}else{
									$five = ($rating_c['5_star']/$rating_c['no_of_rates'])*100;
									$five = $five.'%';
								}
							
						   echo'<li class="five" style="width:'.$five.'"></li>
								<li class="four" style="width:'.$four.'"></li>
								<li class="three" style="width:'.$three.'"></li>
								<li class="two" style="width:'.$two.'"></li>
								<li class="one" style="width:'.$one.'"></li>
							</ul>
						</div>
					</div>';
				?>
				<br />
				<hr style="border: solid 1px lightgray;"/>
				<div class="row" id="padding1">
					<p><b>Activity Notifications:</b></p>
				</div>
				<?php
					if(isset($notification)){
					$count = 0;
					foreach($notification as $n){
						
						if($count == 3){
							break;
						}
						
						if($n['type'] == 'hire you'){
							if($n['status'] == 'unseen'){
							echo '<p id="p"><b>'.$n['associate'].'</b> sent you a hiring request | <a href="';echo base_url('hiremetro/hiring_request');echo'?id='.$n['associate_id'].'">View request</a>
							<p class="small text-right"> '.$n['date'].' </p>';}
							elseif($n['status'] == 'seen-out'){
								echo '<p id="p"><b>'.$n['associate'].'</b> sent you a hiring request | You ignore this request</p>
							<p class="small text-right"> '.$n['date'].' </p>';
							}else{
							echo '<p id="p"><b>'.$n['associate'].'</b> sent you a hiring request | You Accepted this Request</p>
							<p class="small text-right"> '.$n['date'].' </p>';}
							$count++;
						}
						elseif($n['type'] == 'accepted'){
							echo '<p id="p"><b>'.$n['associate'].'</b> accepted your hiring request | <a href="';echo base_url('hiremetro/hiring_view_contact');echo'?id='.$n['associate_id'].'&notif='.$n['notif_id'].'">View contact details</a>
							<p class="small text-right"> '.$n['date'].' </p>';
							$count++;
						}
						elseif($n['type'] == 'write review - employee'){
							if($n['status'] != 'seen'){
							echo '<p id="p">Review your customer : <b>'.$n['associate'].'</b> | <a href="" data-toggle="modal" data-target="#writeModalforEmployer">Write review</a>
							<p class="small text-right"> '.$n['date'].' </p>';}
							else{
								echo '<p id="p">Review your customer : <b>'.$n['associate'].'</b> | You already gave your review</p>
							<p class="small text-right"> '.$n['date'].' </p>';
							}
							$count ++;
						}
						elseif($n['type'] == 'write review - customer'){
							if($n['status'] != 'seen'){
							echo '<p id="p">Review your employee : <b>'.$n['associate'].'</b> | <a href="" data-toggle="modal" data-target="#writeModalforEmployee">Write review</a>
							<p class="small text-right"> '.$n['date'].' </p>';}
							else{
								echo '<p id="p">Review your employee : <b>'.$n['associate'].'</b> | You already gave your review</p>
							<p class="small text-right"> '.$n['date'].' </p>';
							}
							$count ++;
						}
						elseif($n['type'] == 'wrote review - employer'){
							echo '<p id="p">Your employer,<b>'.$n['associate'].'</b> wrote you a review | <a href="" data-toggle="modal" data-target="#writeModalforEmployee">View review</a>
							<p class="small text-right"> '.$n['date'].' </p>';
						}
						elseif($n['type'] == 'wrote review - employee'){
							echo '<p id="p">Your employee,<b>'.$n['associate'].'</b> wrote you a review | <a href="" data-toggle="modal" data-target="#writeModalforEmployee">View review</a>
							<p class="small text-right"> '.$n['date'].' </p>';
						}
						elseif($n['type'] == 'ignore'){
							echo '<p id="p">,<b>'.$n['associate'].'</b> did not accept your request 
							<p class="small text-right"> '.$n['date'].' </p>';
						}
					}
					}
				?>
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
				
				<?php
					if(isset($activity)){
					foreach($activity as $a){
						if($a['type'] == 'you sent'){
						echo '<p id="p">You sent a hiring request to <b>'.$a['associate'].'</b>
							<p class="small text-right"> '.$a['date'].'</p>';
						}
						elseif($a['type'] == 'you accepted'){
						echo '<p id="p">You accepted <b>'.$a['associate'].'</b> hiring request
							<p class="small text-right"> '.$a['date'].'</p>';
						}
						elseif($a['type'] == 'you wrote'){
						echo '<p id="p">You send a rating and review to <b>'.$a['associate'].'</b>
							<p class="small text-right"> '.$a['date'].'</p>';
						}
					}
					}
				?>
				
			</div>
		  </div>
		</div>

		<div id="ManageAds" class="tabcontent">
		  <div class="row" style="padding-top:10px;">
				<div class="col-md-6">
					<div class="row" style="padding-left: 15px;">
					<?php
						if(isset($work_details)){
							echo '<p><b>Work Rate: </p></b>
							
							<form action="';echo base_url('hiremetro/update_ads');echo'" method="post" enctype="multipart/form-data">
							
							<div class="col-md-1">
							</div>
							<div class="col-md-5">
								<div class="row" style="padding-left: 15px;">
									<input class=" form-control" name="rate_price" type="number" min="0" max="100000" step="100" value="'.$work_details['rate_price'].'" style=" padding-left: 10px; width: 145px; height:33px; border-radius: 5px;" ><br>
									 
								</div>
								<div class="row" style="padding-top: 0px; padding-left: 15px;">
								<input type="checkbox" name="negotiable" ';
									if($work_details['negotiable'] == 'Yes'){
										echo 'checked';
									}
								echo' >Negotiable<br>
								</div>
							</div>
							<div class="col-md-5">
							<div>
									
									  <select class="form-control" name="rate_type">
										<option '; if ($work_details['rate_type'] == 'Per Day'){
											echo 'selected';
										}; echo '>Per Day</option>
										<option ';if ($work_details['rate_type'] == 'Per Hour'){
											echo 'selected';
										}; echo '>Per Hour</option>
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
								
								  <select class="form-control" style="width: 290px;" name="category" >
									<option ';
										if($work_details['category'] == 'Bartender')
											echo 'selected';
									echo '>Bartender</option>
									<option ';
										if($work_details['category'] == 'Carpenter')
											echo 'selected';
									echo '>Carpenter</option>
									<option ';
										if($work_details['category'] == 'Cook')
											echo 'selected';
									echo '>Cook</option>
									<option ';
										if($work_details['category'] == 'Driver')
											echo 'selected';
									echo '>Driver</option>
									<option ';
										if($work_details['category'] == 'Gardener')
											echo 'selected';
									echo '>Garderner</option>
									<option ';
										if($work_details['category'] == 'Janitor')
											echo 'selected';
									echo '>Janitor</option>
									<option ';
										if($work_details['category'] == 'Maid')
											echo 'selected';
									echo '>Maid</option>
									<option ';
										if($work_details['category'] == 'Massuesse')
											echo 'selected';
									echo '>Massuese</option>
									<option ';
										if($work_details['category'] == 'Nanny')
											echo 'selected';
									echo '>Nanny</option>
									<option ';
										if($work_details['category'] == 'Plumber')
											echo 'selected';
									echo '>Plumber</option>
									<option ';
										if($work_details['category'] == 'Tutor')
											echo 'selected';
									echo '>Tutor</option>
									<option ';
										if($work_details['category'] == 'Waiter')
											echo 'selected';
									echo '>Waiter</option>
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
								
								  ';
								  
								  require "cities.php";
								  
								  echo '
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
								
								  <input type="file" name="picture" size="20" /><br>
								  <img src ="'; echo base_url($client_information['picture']); echo'" style="width: 100px; height: 100px; border-radius: 100px;">
							</div>
						</div>
						<div class="col-md-1">
						</div>
					</div>
					
					<br />
					
					<div class="row">
					<p><b>Resume </p></b>
						
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
						
							<div >
								
								 <input type="file" name="resume" size="20"   /><br>
								 
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
								background-color: white; font-size: 15px;resize: none;" name="description">'.$work_details['description'].'</textarea>
							</div>
						</div>
						<div class="col-md-1">
						</div>
					<button class="update" type="submit">Update</button>
					</form>';
					}
					else{
						echo '<p><b>Work Rate: </p></b>
							
							<form action="';echo base_url('hiremetro/create_ads');echo'" method="post" enctype="multipart/form-data">
							
							<div class="col-md-1">
							</div>
							<div class="col-md-5">
								<div class="row" style="padding-left: 15px;">
									<input class=" form-control" name="rate_price" type="number" min="0" max="100000" step="100" value="0" style=" padding-left: 10px; width: 145px; height:33px; border-radius: 5px;" ><br>
									 
								</div>
								<div class="row" style="padding-top: 0px; padding-left: 15px;">
								<input type="checkbox" name="negotiable">Negotiable<br>
								</div>
							</div>
							<div class="col-md-5">
							<div>
									
									  <select class="form-control" name="rate_type">
										<option>Per Day</option>
										<option>Per Hour</option>
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
								
								  <select class="form-control" style="width: 290px;" name="category" >
									<option>Bartender</option>
									<option>Carpenter</option>
									<option>Cook</option>
									<option>Driver</option>
									<option>Garderner</option>
									<option>Janitor</option>
									<option>Maid</option>
									<option>Massuese</option>
									<option>Nanny</option>
									<option>Plumber</option>
									<option>Tutor</option>
									<option>Waiter</option>
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
								
								  ';
								  
								  require "cities.php";
								  
								  echo '
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
								
								  <input type="file" name="picture" size="20" /><br>
								  
							</div>
						</div>
						<div class="col-md-1">
						</div>
					</div>
					
					<br />
					
					<div class="row">
					<p><b>Resume </p></b>
						
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
						
							<div >
								
								 <input type="file" name="resume" size="20"   /><br>
								 
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
								background-color: white; font-size: 15px;resize: none;" name="description"></textarea>
							</div>
						</div>
						<div class="col-md-1">
						</div>
					<button class="update" type="submit">Update</button>
					</form>';
					
					}					
				?>
			</div>
			<br />
		</div>

		<div id="Transactions" class="tabcontent">
			<div class="row">
				<h3 style="padding-left: 15px;"> Most Recent Transaction </h3>
			</div>
			<?php
				
				if(isset($transactions)){
					echo '
					<div class="row" style="padding: 0px 50px;">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name of Client</th>
									<th>Employee/Employer</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>'.$transactions[0]['associate'].'</td>
									<td>'; if($transactions[0]['type'] == 'Employee'){
										echo 'Customer';
									}else{
										echo 'Employee';
									} echo'</td>
									<td>'.$transactions[0]['date'].'</td>
								</tr>
							</tbody>
						</table>
					</div>';
				}
				else{
					echo '
					<div class="row" style="padding: 0px 50px;">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Name of Client</th>
									<th>Employee/Employer</th>
									<th>Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>NO TRANSACTIONS</td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>';
				}
			?>
			<div class="row">
				<h3 style="padding-left: 15px;"> Previous Transactions </h3>
			</div>
			
			<div class="row" style="padding: 0px 50px;">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name of Client</th>
							<th>Employee/Employer</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if(isset($transactions)){
							$i = 1;
							foreach($transactions as $t){
								if ($i != 1){
									echo'
									<tr>
										<td>'.$transactions['associate'].'</td>
										<td>';  if($transactions[0]['type'] == 'Employee'){
										echo 'Customer';
									}else{
										echo 'Employee';
									}echo'</td>
										<td>'.$transactions['date'].'</td>
									</tr>';
								}
							}
						}
					?>
						
					</tbody>
				</table>
			</div>
			
		</div>
		
		<div id="AccountSettings" class="tabcontent" style="padding-top:20px; padding-bottom:20px;">
			<div class="row">
				<div class="col-md-1">
				</div>
				<form action="<?php echo base_url('hiremetro/update_information')?>" method="post" enctype="multipart/form-data">
				<div class="col-md-2">
					<p><b>Profile Picture:  </p></b>
				</div>
				<div class="col-md-7">
					<input type="file" name="userfile" size="20"/><br>
					<img style="width: 100px; height: 100px; border-radius: 100px;" src="<?php echo base_url($this->session->userdata('picture'))?>">
					<br/>
				</div>
				<div class="col-md-1">
				</div>
			</div>
			
			<br/>
			
			<div class="row">
				<div class="col-md-1">
				</div>
			
				<div class="col-md-2">
					<p><b>Change E-mail:  </p></b>
				</div>
				<div class="col-md-7">
					<input type="text" placeholder="New E-mail" class="form-control" name="email" value="<?php echo $this->session->userdata('email')?>" > 
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
					<input type="text" placeholder="First name" class="form-control" name="fname" value="<?php echo $client_information['fname']?>">
				</div>
				<div class="col-md-3">
					<input type="text" placeholder="Last name" class="form-control" name="lname" value="<?php echo $client_information['lname']?>">
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
						<input type="password" placeholder="New password" class="form-control" style="width: 190px;" name="password"><br/>
						<input type="password" placeholder="Confirm password" class="form-control" style="width: 190px;" name="confirm_password">
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
						<input type="text" placeholder="New mobile number" class="form-control" style="width: 190px;" name="contact" value="<?php echo $client_information['contact']?>"><br/>
						
					</div>
				
					
					
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 text-right">
					<button type="submit" class="btn btn-primary" >Save Changes</button>
				</div>
			</div>
		</div>
		
		<div id="Notifications" class="tabcontent">
			<?php
				if(isset($notification)){
					foreach($notification as $n){
						echo '
						<div class="row" ';
						echo 'style="padding: 10px 50px">';
						
						if($n['type'] == 'hire you'){
								if($n['status'] != 'seen'){
								echo '<p id="request"><b>'.$n['associate'].'</b> sent you a hiring request | <a href="#">View request</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';}
								else{
								echo '<p id="request"><b>'.$n['associate'].'</b> sent you a hiring request | You already accepted this request</p>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';
								}
								
							}
							elseif($n['type'] == 'accepted'){
								if($n['status'] != 'seen'){
								echo '<p><b>'.$n['associate'].'</b> accepted your hiring request | <a href="#">View contact details</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';}
							}
							elseif($n['type'] == 'write review - employee'){
								if($n['status'] != 'seen'){
								echo '<p id="request">Review your customer : <b>'.$n['associate'].'</b> | <a href="#">Write review</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';}
								else{
								echo '<p id="request">Review your customer : <b>'.$n['associate'].'</b> | You already gave your review</p>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';
								}
							}
							elseif($n['type'] == 'write review - customer'){
								if($n['status'] != 'seen'){
								echo '<p id="request">Review your employee : <b>'.$n['associate'].'</b> | <a href="#">Write review</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';}
								else{
								echo '<p id="request">Review your employee : <b>'.$n['associate'].'</b> | You already gave your review </p>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';
								}
							}
							elseif($n['type'] == 'wrote review - employer'){
								echo '<p id="request">Your employer, <b>'.$n['associate'].'</b> wrote you a review | <a href="#">View review</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';
							}
							elseif($n['type'] == 'wrote review - employee'){
								echo '<p id="request">Your employee, <b>'.$n['associate'].'</b> wrote you a review | <a href="#">View review</a>
								<p style="float: right;"> '.$n['date'].' </p>
								</div>';
							}
					}
					
				}
			?>
		  
		</div>
		
			<div id="Reviews" class="tabcontent">
			<div class="row" style="padding-top:10px;">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
				</div>
			</div>
		
			<br />
			<div class="row">
				<div class="col-md-6">
					<p style="padding-left:15px;">Total Ratings (as employee): </p>
					<div class="col-md-2">
						<h1><?php if(isset($work_details)){echo number_format((float)$rating['total_rating'], 1, '.', '');}?></h1>
					</div>
				
					<div class="col-md-5">	
						<div id="star" class="text-center">
							<?php
							if(isset($work_details)){
								$total = (int)$rating['total_rating'];
								
									if($total == 5){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>';
										}
										elseif($total == 4){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 3){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 2){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 1){
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
							}
							?>
							<h6 style="margin-top: -5px; margin-bottom: 30px;"><br /> <?php if(isset($work_details)){ echo '('.$rating['no_of_rates'].' rates)';}?> </h6>
						</div>
					</div>
					
					<div class="col-md-3">
						<ul class="bargraph" style="margin-left:-20px;">
							<?php
							if(isset($work_details)){
								if($rating['1_star'] == 0){
									$one = "0%";
								}else{
									$one = ($rating['1_star']/$rating['no_of_rates'])*100;
									$one = $one.'%';
								}
								
								if($rating['2_star'] == 0){
									$two = "0%";
								}else{
									$two = ($rating['2_star']/$rating['no_of_rates'])*100;
									$two = $two.'%';
								}
								
								if($rating['3_star'] == 0){
									$three = "0%";
								}else{
									$three = ($rating['3_star']/$rating['no_of_rates'])*100;
									$three = $three.'%';
								}
								
								if($rating['4_star'] == 0){
									$four = "0%";
								}else{
									$four = ($rating['4_star']/$rating['no_of_rates'])*100;
									$four = $four.'%';
								}
								
								if($rating['5_star'] == 0){
									$five = "0%";
								}else{
									$five = ($rating['5_star']/$rating['no_of_rates'])*100;
									$five = $five.'%';
								}
							
						   echo'<li class="five" style="width:'.$five.'"></li>
								<li class="four" style="width:'.$four.'"></li>
								<li class="three" style="width:'.$three.'"></li>
								<li class="two" style="width:'.$two.'"></li>
								<li class="one" style="width:'.$one.'"></li>
							</ul>';
							}?>
					</div>
					<div class="col-md-2"> </div>
				</div>
				<div class="col-md-6">
					<p style="padding-left:15px;">Total Ratings (as employer): </p>
					<div class="col-md-2">
						<h1><?php echo number_format((float)$rating_c['total_rating'], 1, '.', '');?></h1>
					</div>
					
					<div class="col-md-5">	
						<div id="star" class="text-center">
							<?php
								$total = (int)$rating_c['total_rating'];
								
									if($total == 5){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>';
										}
										elseif($total == 4){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 3){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 2){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($total == 1){
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
							?>
							<h6 style="margin-top: -5px; margin-bottom: 30px;"><br />( <?php echo $rating_c['no_of_rates']?> rates )</h6>
						</div>
					</div>
					<div class="col-md-3">
						<ul class="bargraph" style="margin-left:-20px;">
							<?php
								if($rating_c['1_star'] == 0){
									$one = "0%";
								}else{
									$one = ($rating_c['1_star']/$rating_c['no_of_rates'])*100;
									$one = $one.'%';
								}
								
								if($rating_c['2_star'] == 0){
									$two = "0%";
								}else{
									$two = ($rating_c['2_star']/$rating_c['no_of_rates'])*100;
									$two = $two.'%';
								}
								
								if($rating_c['3_star'] == 0){
									$three = "0%";
								}else{
									$three = ($rating_c['3_star']/$rating_c['no_of_rates'])*100;
									$three = $three.'%';
								}
								
								if($rating_c['4_star'] == 0){
									$four = "0%";
								}else{
									$four = ($rating_c['4_star']/$rating_c['no_of_rates'])*100;
									$four = $four.'%';
								}
								
								if($rating_c['5_star'] == 0){
									$five = "0%";
								}else{
									$five = ($rating_c['5_star']/$rating_c['no_of_rates'])*100;
									$five = $five.'%';
								}
							
						   echo'<li class="five" style="width:'.$five.'"></li>
								<li class="four" style="width:'.$four.'"></li>
								<li class="three" style="width:'.$three.'"></li>
								<li class="two" style="width:'.$two.'"></li>
								<li class="one" style="width:'.$one.'"></li>
								</ul>';
							?>
					</div>
					<div class="col-md-2"> </div>
				</div>
			</div>
		  
		  <hr style="border: solid 1px gray;"/>
				
				<?php
					if(isset($reviews)){
						foreach($reviews as $r){
							echo '<div class="row">
									<div class="col-md-1">
									</div>
									<div class="col-md-10">

										<div class="row">
											<div class="col-md-2">
												<a href="#"><img width=" 90px" height="90px" src="';echo base_url($r['picture']);echo'" style="border-radius: 100px;"/></a>
											</div>
											<div class="col-md-10 paddingads" >
												<div id="star2"><h3>'.$r['associate'].'</h3>
												<h4>'; 
													
													if($r['type'] == 'Customer'){
														echo 'Employer';
													}else{
														echo 'Employee';
													}
													
												echo '</h4>';
														if($r['rate'] == 5){
															echo '
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>';
														}
														elseif($r['rate'] == 4){
															echo '
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span>&#9733;</span>';
														}
														elseif($r['rate'] == 3){
															echo '
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>';
														}
														elseif($r['rate'] == 2){
															echo '
															<span class="checked">&#9733;</span>
															<span class="checked">&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>';
														}
														elseif($r['rate'] == 1){
															echo '
															<span class="checked">&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>
															<span>&#9733;</span>';
														};
														echo '</div></h3>';
														echo '</div></div>';
														echo '<div class="row" style="padding-left: 10px;">
																<div class="col-md-12">
																	<h5>'.$r['content'].'</h5>
																	</div>
																	</div>
																	<div class="row">
								<p class=" small text-right" style="padding-right: 10px;"> '.$r['date'].' </p>
							</div>
						</div>
						<div class="col-md-1 ">
						</div>
				</div>
				
			
			
			<hr style="border: solid 1px lightgray;"/>';
						}
					}else{
						echo '<div class="row">
									<div class="col-md-1">
									</div>
									<div class="col-md-10">
									<h3>No Reviews Yet</h3>
										
						</div>
						<div class="col-md-1 ">
						</div>
				</div>
				
			
			
			<hr style="border: solid 1px lightgray;"/>';
					}
				?>
				
			
			
			

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
		
		<!-- Modal for Form Validation Error-->
		<div class="modal fade" id="form_error" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> CREATE ADS </h4>
					</div>
					<div class="modal-body text-center">
						<?php echo $this->session->flashdata('errors'); ?>
					</div>
					<div class="modal-footer text-center">
						<button class="w3-btn w3-hover-teal w3-black" data-dismiss="modal">Ok</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal for Form View Contact Details Error-->
		<div class="modal fade" id="contact_details" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title">Contact Details </h4>
					</div>
					<div class="modal-body text-center">
						<img src="<?php echo base_url($this->session->flashdata('apicture'));?>" style="border-radius: 100px;">
						<br/><br/>
						<p><?php echo $this->session->flashdata('aname')?></p>
						<p><?php echo $this->session->flashdata('acontact')?></p>
						<div class="w3-panel w3-teal">
						  <p>! Please take note that you will only see this once !</p>
						</div> 
					</div>
					<div class="modal-footer text-center">
						<button class="w3-btn w3-hover-teal w3-teal" data-dismiss="modal">Ok</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
			<!-- Modal for review-->
		<div class="modal fade" id="writeModalforEmployer" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> REVIEW </h4>
						<p>write your review to improve employer's performance</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/submit_review')?>" method="post">
							<div class="form-vertical">
								<span class="star-rating text-center">
								  <span class="star-rating">
									  <input type="radio" name="star" value="1"><i></i>
									  <input type="radio" name="star" value="2"><i></i>
									  <input type="radio" name="star" value="3"><i></i>
									  <input type="radio" name="star" value="4"><i></i>
									  <input type="radio" name="star" value="5"><i></i>
									</span>
								</span>
								<h4><b>Leave a review:</b></h4>
								<div class="form-group text-left">
									<textarea rows="5" cols="70" placeholder="Write a review..." maxlength="200" name="review"></textarea>
								</div>
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="w3-btn w3-teal w3-hover-teal" name="role" value="employee">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal for review-->
		<div class="modal fade" id="writeModalforEmployee" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> REVIEW </h4>
						<p>write your review to improve employee's performance</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/submit_review')?>" method="post">
							<div class="form-vertical">
								
								<span class="star-rating">
								  <input type="radio" name="star" value="1"><i></i>
								  <input type="radio" name="star" value="2"><i></i>
								  <input type="radio" name="star" value="3"><i></i>
								  <input type="radio" name="star" value="4"><i></i>
								  <input type="radio" name="star" value="5"><i></i>
								</span>
										
									
								<h4><b>Leave a review:</b></h4>
								<div class="form-group text-left">
									<textarea rows="5" cols="70" placeholder="Write a review..." maxlength="200" name="review"></textarea>
								</div>
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="w3-btn w3-teal w3-hover-teal" name="role" value="employer">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
