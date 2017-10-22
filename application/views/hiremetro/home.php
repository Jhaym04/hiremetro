<!-- homepage lol -->
	
	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		
		<!-- NEED HELP? -->
		
		<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
			<ol	class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" ></li>
				<li data-target="#myCarousel" data-slide-to="2" ></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo base_url('images/pic1.jpg')?>" alt="">
				</div>
				
				<div class="item">
					<img src="<?php echo base_url('images/pic2.jpg')?>" alt="">
				</div>
				
				<div class="item">
					<img src="<?php echo base_url('images/pic3.jpg')?>" alt="">
				</div>
			</div>
			
			
			</div>
		</div>
		
		<!-- jobs -->
		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " id="jobs">
			<br />
				
				<div class="row text-center " >
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h3>Browse.Talk.Hire</h3>
				</div>
				<div class="col-md-4">
				</div>
				</div>
				<br />
				
				
				<!-- search bar -->
				
				<div class="row text-center " id="search">
					<form action="<?php echo base_url('hiremetro/search')?>" method="post">	
						<input type="text" name="search" class="search"  placeholder="Find manpower ... " /> 
						<input type="submit" name="Search" />
					</form>
				</div>
				
				<!-- categories -->
				<br/>
				
				<div class="row text-left">
					<div class="col-md-3">
						<h3>IN DEMAND JOBS</h3>	
					</div>
					<div class="col-md-9"> 
					</div>
				</div>
				<br />
				
				<?php
				
					echo'
				
					<div class="row text-center" id="indemand">
						<div class="col-md-1">
						</div>
						<div class=" col-md-2 brighten pic">
							<a href="';echo base_url('hiremetro/search');echo '?category='.$indemand[0]['category_name'].'"><img src="';echo base_url($indemand[0]['picture']); echo '" /></a>
							<h4> '.$indemand[0]['category_name'].' <span class="badge" >'.$indemand[0]['no_of_ads'].'</span></h4>
						  </div>
						<div class="col-md-3 brighten pic">
							<a href="';echo base_url('hiremetro/search');echo '?category='.$indemand[1]['category_name'].'"><img src="';echo base_url($indemand[1]['picture']); echo'" alt=""></a>	
							<h4>'.$indemand[1]['category_name'].'<span class="badge" >'.$indemand[1]['no_of_ads'].'</span></h4>
						</div>
						<div class="col-md-3 brighten pic">
							<a href="';echo base_url('hiremetro/search');echo '?category='.$indemand[2]['category_name'].'"><img src="';echo base_url($indemand[2]['picture']); echo'" alt=""></a>	
							<h4> '.$indemand[2]['category_name'].' <span class="badge" >'.$indemand[2]['no_of_ads'].'</span></h4>
						</div>
						<div class="col-md-2 brighten pic">
							<a href="';echo base_url('hiremetro/search');echo '?category='.$indemand[3]['category_name'].'"><img src="';echo base_url($indemand[3]['picture']); echo'" alt=""></a>	
							<h4> '.$indemand[3]['category_name'].' <span class="badge" >'.$indemand[3]['no_of_ads'].'</span></h4>
						</div>';
					
					?>
					
					
						
					<div class="col-md-1">
					</div>
				
				</div>
				
				<hr style="border: solid 1px gray;"/>
				
				<div class="row text-left">
					<div class="col-md-3">
						<h3>CATEGORIES</h3>	
					</div>
					<div class="col-md-9"> 
					</div>
				</div>
				
				<div class="row text-center brighten">
					
					<br /> <br />
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						
						<a href="<?php echo base_url('hiremetro/search')?>?category=Bartender"><img style="padding: 0px;" src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
						<h4> BARTENDER <span class="badge" ><?php echo $no_ads[0]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Gardener"><img src="<?php echo base_url('images/gardener.png')?>" alt=""></a>
						<h4> GARDENER <span class="badge"><?php echo $no_ads[4]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Nanny"><img src="<?php echo base_url('images/nanny.png')?>" alt=""></a>
						<h4> NANNY <span class="badge"><?php echo $no_ads[8]['no_of_ads']?></span></h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search')?>?category=Carpenter"><img src="<?php echo base_url('images/carpenter.png')?>" alt=""></a>
						<h4> CARPENTER <span class="badge"><?php echo $no_ads[1]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Janitor"><img src="<?php echo base_url('images/janitor.png')?>" alt=""></a>
						<h4> JANITOR <span class="badge"><?php echo $no_ads[5]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Plumber"><img src="<?php echo base_url('images/plumber.png')?>" alt=""></a>
						<h4> PLUMBER <span class="badge"><?php echo $no_ads[9]['no_of_ads']?></span></h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search')?>?category=Cook"><img src="<?php echo base_url('images/cook.png')?>" alt=""></a>
						<h4> COOK <span class="badge"><?php echo $no_ads[2]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Maid"><img src="<?php echo base_url('images/maid.png')?>" alt=""></a>
						<h4> MAID <span class="badge"><?php echo $no_ads[6]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Tutor"><img src="<?php echo base_url('images/tutor.png')?>" alt=""></a>
						<h4> TUTOR <span class="badge"><?php echo $no_ads[10]['no_of_ads']?></span></h4>
						<br /> <br />
					</div>
					<div class="col-md-2">
						<a href="<?php echo base_url('hiremetro/search')?>?category=Driver"><img src="<?php echo base_url('images/driver.png')?>" alt=""></a>
						<h4> DRIVER <span class="badge"><?php echo $no_ads[3]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Masseuse"><img src="<?php echo base_url('images/massause.png')?>" alt=""></a>
						<h4> MASSEUSE <span class="badge"><?php echo $no_ads[7]['no_of_ads']?></span></h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search')?>?category=Waiter"><img src="<?php echo base_url('images/waiter.png')?>" alt=""></a>
						<h4> WAITER <span class="badge"><?php echo $no_ads[11]['no_of_ads']?></span></h4>
						<br /> <br />
						<br /> <br />
					</div>
					<div class="col-md-1">
					</div>
				
				</div>	
			
			</div>
			
			<div class="col-md-1">
			</div>
			
		
		</div>
		