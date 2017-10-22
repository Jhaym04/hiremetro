
<!-- filter-->

	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
	<br />
	<br />
	<br />
		<div id= "whole" class="row ">
			
			<div class="col-md-1" >
			</div>
			
			<div class="col-md-10 ">
			
			<!--MALAKI-->
			
				<div id="left" class="col-md-8" id="paddd">
				
					<!-- search bar -->

				
					<div class="row" id="padd">
							<ul class="breadcrumb">
							  <li><a href="<?php echo base_url('hiremetro')?>">Home</a></li>
							  <li><a href="#">Search</a></li>
							</ul>
					</div>
					
					<div class="row text-center " >
						<div class="col-md-1">
						</div>
						<div class="col-md-10">
							<div class="row" id="search">
								
								<form action="<?php echo base_url('hiremetro/search')?>" method="post">	
									<input id="text" type="text" name="search" class="search" value="<?php echo $search ?>" /> 
									<input type="submit" name="Search" />	
									<div class="text-center" style="float: right;">
										  <select class="form-control" id="dp" name="Sort" >
											<option>All</option>
											<option>Rating</option>
										  </select>
									</div>
										
										  
									
								</form>
							</div>
							
							<div class="row">
								<h5>Search results for <b><?php echo $search ?></b><h5>
							</div>	
						</div>
						<div class="col-md-1">
						</div>					
					</div>
					<br />
					
					<?php
					
					if(isset($noresult)){
						echo '
						<div class="row" id="result">
							<div class="col-md-2">
							</div>		
						
							<div class="col-md-9 text-center">
								<h5 style="color: teal;"> No results found </h5>
							</div>
							
							<div class="col-md-1">
							</div>				
						</div>';
					}
					else{
						foreach($employees as $e){
							if($e['status'] == 'show'){
							echo'
							<a href="';echo base_url('hiremetro/view_ads');echo'?id='.$e['client_id'].'">
							<div class="row" id="result">
								<div class="col-md-2 brighten pic">
									<img src="';echo base_url($e['picture']); echo '" class="img-responsive" alt ="employee picture">
								</div>
								
								<div class="col-md-9">
									<h4>'.$e['fname'].' '.$e['lname'].'</h4>
									<h5 style = "color:teal;"><b> '.$e['category'].'</b> | '.$e['location'].' | P'.$e['rate_price'].' '.$e['rate_type'].'</h5>
									<h6>"'.$e['description'].'"</h6>
									<div id="star">
										<h6> Rating :';
										if($e['total_rating'] == 5){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>';
										}
										elseif($e['total_rating'] == 4){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($e['total_rating'] == 3){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($e['total_rating'] == 2){
											echo '
											<span class="checked">&#9733;</span>
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										elseif($e['total_rating'] == 1){
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										else{
											echo '
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
										echo '</h6>
									</div>
								</div>
								
								<div class="col-md-1">
								</div>
							</div>
							</a>
							<hr style="border: solid 1px lightgray;"/>';}
						}
					
					}
					?>
								
						
				</div>
				
				
				<!--MALIIT-->
					
				<div  class="col-md-4" id="borderleft">

					<div class="row text-center" >
						<p id="other">Other jobs to find:</p>
					</div>
						
						
						<div class="row text-center" >
						<br />
								
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Bartender"><img width="105px" height="105px" src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
									<h5> BARTENDER <span class="badge" ><?php echo $no_ads[0]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Carpenter"><img width="105px" height="105px" src="<?php echo base_url('images/carpenter.png')?>" alt=""></a>	
									<h5> CARPENTER <span class="badge" ><?php echo $no_ads[1]['no_of_ads']?></span></h5>
								</div>
			
						</div>
						
						<div class="row text-center" >
						<br />
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Cook"><img width="105px" height="105px" src="<?php echo base_url('images/cook.png')?>" alt=""></a>	
									<h5> COOK <span class="badge" ><?php echo $no_ads[2]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Driver"><img width="105px" height="105px" src="<?php echo base_url('images/driver.png')?>" alt=""></a>	
									<h5> DRIVER <span class="badge" ><?php echo $no_ads[3]['no_of_ads']?></span></h5>
								</div>
			
						</div>
						
						<div class="row text-center" >
						<br />
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Gardener"><img width="105px" height="105px" src="<?php echo base_url('images/gardener.png')?>" alt=""></a>	
									<h5> GARDENER <span class="badge" ><?php echo $no_ads[4]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Janitor"><img width="105px" height="105px" src="<?php echo base_url('images/janitor.png')?>" alt=""></a>	
									<h5> JANITOR <span class="badge" ><?php echo $no_ads[5]['no_of_ads']?></span></h5>
								</div>
			
						</div>
						
						<div class="row text-center" >
						<br />
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Maid"><img width="105px" height="105px" src="<?php echo base_url('images/maid.png')?>" alt=""></a>	
									<h5> MAID <span class="badge" ><?php echo $no_ads[6]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Masseuse"><img width="105px" height="105px" src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
									<h5> MASSEUSE <span class="badge" ><?php echo $no_ads[7]['no_of_ads']?></span></h5>
								</div>
			
						</div>
						
						<div class="row text-center" >
						<br />
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Nanny"><img width="105px" height="105px" src="<?php echo base_url('images/nanny.png')?>" alt=""></a>	
									<h5> NANNY <span class="badge" ><?php echo $no_ads[8]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Plumber"><img width="105px" height="105px" src="<?php echo base_url('images/plumber.png')?>" alt=""></a>	
									<h5> PLUMBER <span class="badge" ><?php echo $no_ads[9]['no_of_ads']?></span></h5>
								</div>
			
						</div>
						
						<div class="row text-center" >
						<br />
						
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Tutor"><img width="105px" height="105px" src="<?php echo base_url('images/tutor.png')?>" alt=""></a>	
									<h5>TUTOR <span class="badge" ><?php echo $no_ads[10]['no_of_ads']?></span></h5>
								</div>
								
								<div class="col-md-6">
									<a href="<?php echo base_url('hiremetro/search')?>?category=Waiter"><img width="105px" height="105px" src="<?php echo base_url('images/waiter.png')?>" alt=""></a>	
									<h5> WAITER <span class="badge" ><?php echo $no_ads[11]['no_of_ads']?></span></h5>
								</div>
								
			
						</div>
											
				</div>
									
			</div>
	
			<div class="col-md-1">
			</div>
			
		</div>
		<br />
