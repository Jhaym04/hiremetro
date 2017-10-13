<!-- homepage lol -->

<?php
	if($this->session->userdata('signup1') == TRUE){
		
		$this->session->set_userdata('signup1', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#signup2Modal').modal('show');
			});
		</script>";
		
		$this->session->set_userdata('signup1', FALSE);
	};
	
	if($this->session->userdata('back') == TRUE){
		
		$this->session->set_userdata('back', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#signup1Modal').modal('show');
			});
		</script>";
		
	}
	
	if($this->session->userdata('login_FALSE') == TRUE){
		
		$this->session->set_userdata('login_FALSE', FALSE);
		
		echo "<script> 
			 $(window).on('load',function(){
				$('#loginFALSE').modal('show');
			});
		</script>";
		
		
	}
?>
	
	
	
	<!-- Parallax Background -->
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 50%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
			
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
				
				<br /> <br />
				
				<!-- search bar -->
				
				<div class="row text-center " id="search">
					<form action="<?php echo base_url('hiremetro/search') ?>" method="post">
						<input type="text" name="valueToSearch" placeholder="Search">
						<input type="submit" name="search" value="Search">
					</form>
				</div>
				
				<!-- categories -->
				
				<div class="row text-center">
					
					<br /> <br />
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=bartender';?>"><img src="<?php echo base_url('images/bartender.png')?>" alt=""></a>	
						<h4> BARTENDER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=gardener';?>"><img src="<?php echo base_url('images/gardener.png')?>" alt=""></a>
						<h4> GARDENER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=nanny';?>"><img src="<?php echo base_url('images/nanny.png')?>" alt=""></a>
						<h4> NANNY </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=carpenter';?>"><img src="<?php echo base_url('images/carpenter.png')?>" alt=""></a>
						<h4> CARPENTER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=janitor';?>"><img src="<?php echo base_url('images/janitor.png')?>" alt=""></a>
						<h4> JANITOR </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=plumber';?>"><img src="<?php echo base_url('images/plumber.png')?>" alt=""></a>
						<h4> PLUMBER </h4>
						<br /> <br />
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=cook';?>"><img src="<?php echo base_url('images/cook.png')?>" alt=""></a>
						<h4> COOK </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=maid';?>"><img src="<?php echo base_url('images/maid.png')?>" alt=""></a>
						<h4> MAID </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=tutor';?>"><img src="<?php echo base_url('images/tutor.png')?>" alt=""></a>
						<h4> TUTOR </h4>
						<br /> <br />
					</div>
					<div class="col-md-2">
						<a href="<?php echo base_url('hiremetro/search_category').'?category=driver';?>"><img src="<?php echo base_url('images/driver.png')?>" alt=""></a>
						<h4> DRIVER </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=masseuse';?>"><img src="<?php echo base_url('images/massause.png')?>" alt=""></a>
						<h4> MASSEUSE </h4>
						<br /> <br />
						<a href="<?php echo base_url('hiremetro/search_category').'?category=waiter';?>"><img src="<?php echo base_url('images/waiter.png')?>" alt=""></a>
						<h4> WAITER </h4>
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
		
		