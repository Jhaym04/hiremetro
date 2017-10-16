<!-- filter lol -->

	 <?php
		function ageCalculator($dob){
			if(!empty($dob)){
				$birthdate = new DateTime($dob);
				$today   = new DateTime('today');
				$age = $birthdate->diff($today)->y;
				return $age;
			}
			else{
				return 0;
			}
	}
	?>
	
	
		
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">

		<div class="row ">
			<div class="col-md-2 ">
			</div>
				
			<div class="col-md-8 ">
				<br /> <br /> <br /> <br /> 
					
				<!-- search bar -->
				<div class="row text-center " id="search">
					<form action="<?php echo base_url('hiremetro/search') ?>" method="post">
						<input type="text" name="valueToSearch" placeholder="Search">
						<input type="submit" name="search" value="Search">
					</form>
				</div>	
			</div>
				
			<div class="col-md-2 ">
			</div>	
		</div>
			
		<br/>
			
		<!-- filter -->
			
			<?php 
				
				if(isset($noresult)){
					echo '
						<div class="row">
						<div class="col-md-2 ">
						</div>				
							
						<div class="col-md-8 text-center">
							<h4 style="color:teal;"> No results found. </h4>
						</div>	
							
						<div class="col-md-2">
						</div>
						<br/> 
						</div>';
				}
				else{
				
					foreach((array)$employees as $e){
						$dob= $e['birthday'];
						$dob= ageCalculator($dob);
						if($e['status'] == 'show'){
						echo '
							<div class="row">
								<div class="col-md-2 ">
								</div>				
									
								<div class="col-md-8 text-center">
									<div class="col-md-3 dp">
										<img src="'; echo base_url($e['picture']); echo '" alt="">
									</div>		
										
									<div class="col-md-6" id="search_result">
										<a href="'; echo base_url('hiremetro/employee_profile').'?username='.$e['username'].'"><h3>'
										.$e['lname'].', '.$e['fname'].' '.$e['mname'].'</h3></a>
										<h4 style="color:teal;"> '.$e['work_title'].' </h4>
										<h5> '.$e['address'].' | '.$e['sex'].' | '.$dob.' yrs old </h5>
										<h6> '.$e['description'].'	</h6>
									</div>
									
									<div class="col-md-3">
									</div>
								</div>	
									
								<div class="col-md-2">
								</div>
							</div>';
						}
						
					}
				
				}
			?>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
	