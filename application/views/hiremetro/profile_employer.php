<!-- profile -->
	
	<!-- Navbar -->
	<style>
	

	
	div {
	font-family: montserrat;
}



.pagee{
	background-image: url('images/bg.png');
	
	/* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.affix {
      top: 0;
      width: 100%;
	  z-index: 10;
 }
 
 .navbar-custom {
    background-color:#3b8686;
    color: white;
    border-radius:0;
}

.navbar-custom .navbar-nav > li > a {
    color: white;
}

.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
    color: black;
	background-color: transparent;
}

.none {
list-style-type : none;
}



#logo img {
	
	height: 40px;
	margin: 5px;
	margin-left: 20px;
	
}


#logo span{
	background-color: white;
}

#needhelp img{
	width: 1366px;
}

#myCarousel img{
	width: 100%;
}

#search input[type=submit]{
	border: 0xpx;
    border-radius: 2px;
	font-size: 8px;
	background-color: #0b486b;
	color: white;	
}

#search input[type=text]{
	width: 200px;
	border-radius: 3px;

}


#jobs h4{
	font-family: abeatbykai;
	
}



#footer{
	background-color: #3b8686;
	
}

#footer a{
	text-decoration: underline;
	color: white;
}

#footer img{
	width: 25px;
	height: 25px;
}

.border{
	border: 3px solid gray;

}

button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	margin-top: -20px;
}

button.accordion.active, button.accordion:hover {
    background-color: #d3d6d7;
}

button.accordion:after {
    content: '\23f5';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\23f7";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

.small{
	font-size:12px;
}
	
		
			
.checked { color: #3b8686; }
#star {
	text-align: center;
	font-size: 35px; 
	position: relative;
	top: 10px;
}

.bargraph {
	position: relative;
	left : -20px;
	margin: auto;
	list-style: none;
	padding-top: 5px;
	width:200px;
}
ul.bargraph li {
	height: 15px;
	font-size: 10px;
	padding: 0px 10px;
	margin-bottom: 3px;
}
ul.bargraph li.five { background: blue; width:35%; }		 
ul.bargraph li.four { background: green; width:100%; }	 
ul.bargraph li.three { background: yellow; width:80%; }	 
ul.bargraph li.two { background: orange; width:20%; }	 
ul.bargraph li.one { background: red; width:5%; }
			
			.dropdown-large {
  position: static !important;
}
.dropdown-menu-large {
  margin-left: 16px;
  margin-right: 16px;
  padding: 15px 0px;
}
.dropdown-menu-large > li > ul {
  padding: 0;
  margin: 0;
}
.dropdown-menu-large > li > ul > li {
  list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #333333;
  white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover,
.dropdown-menu-large > li ul > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a,
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  color: #999999;
}
.dropdown-menu-large .disabled > a:hover,
.dropdown-menu-large .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
  color: #428bca;
  font-size: 18px;
}
@media (max-width: 768px) {
  .dropdown-menu-large {
    margin-left: 0 ;
    margin-right: 0 ;
  }
  .dropdown-menu-large > li {
    margin-bottom: 20px;
  }
  .dropdown-menu-large > li:last-child {
    margin-bottom: 0;
  }
  .dropdown-menu-large .dropdown-header {
    padding: 0px 15px !important;
  }
}




.paddingads {
	padding-left: 5px;
}

.imgg{
	width: 180px;
	height:180px;
}

#name {
	font-size: 30px;
	text-decoration:bold;
}

#cat {
	font-size: 25px;
	color:#3b8686;
}
			
</style>	
	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " >
				
				<br /> <br /> <br />	


				<div class="row" id="padd">
							<ul class="breadcrumb">
							  <li><a href="<?php echo base_url('hiremetro/client_profile')?>">Profile</a></li>
							  <li><a href="#"><?php echo $client_information['fname'].' '.$client_information['lname']?></a></li>
							</ul>
				</div>
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-2 text-center">
						<img class="imgg"  src="<?php echo base_url($client_information['picture'])?>" alt="" style="border-radius:100px;">
											
					</div>
					
				
					<div class="col-md-4" style="padding-left: 30px;" >
					<br />
						<p id="name"><?php echo $client_information['fname'].' '.$client_information['lname']?></p>
						<p id="cat">Employer</p>
						<a href="<?php echo base_url('hiremetro/accept_request')?>"><input type="submit" name="accept"  value="Accept" class="w3-btn w3-teal w3-hover-teal"></a>
						<a href="<?php echo base_url('hiremetro/ignore_request')?>"><input type="submit" name="delete" value="Ignore" class="w3-btn w3-red w3-hover-red"></a>
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
				
				<br />
						
				<br />
		
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-1">
						<p style="font-size: 60px;" class="text-center"><?php echo number_format((float)$rating['total_rating'], 1, '.', '');?></p>
					</div>
					<div class="col-md-3" >
								
						<div id="star" class="text-center">
							<?php
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
										}else{
											echo '
											<span class="checked">&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>
											<span>&#9733;</span>';
										}
							?>
							<h6 style="margin-top: -5px; margin-bottom: 30px;">( <?php echo $rating['no_of_rates']?> rates )</h6>
						</div>
					</div>
					<div class="col-md-2 text-left">
						<ul class="bargraph">
							<?php
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
							
						   echo'<li class="five" style="width:'.$five.';color:white;">5</li>
								<li class="four" style="width:'.$four.';color:white;">4</li>
								<li class="three" style="width:'.$three.';color:white;">3</li>
								<li class="two" style="width:'.$two.';color:white;">2</li>
								<li class="one" style="width:'.$one.';color:white;">1</li>';
							?>
						</ul>
					</div>
					<div class="col-md-5">
					</div>
				</div>
					
					<hr style="border: 1px solid lightgray">
					
					<br />
					
					<div class="row">
						<div class="col-md-7">
						</div>
						
						<div class="col-md-1" style="padding-right:-60px;">
							
						</div>
						
						<div class="col-md-3">
														
									  
										
						</div>
					</div>
					<br />
					
					
					<div class="row" style="padding-left: 10px; padding-right: 10px;">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<?php
								if(isset($reviews)){
									foreach($reviews as $r){
										echo '
										<div class="row">
											<div class="col-md-2">
												<img width=" 90px" height="90px" src="';echo base_url($r['picture']); echo'" style="border-radius: 100px;"/></a>
											</div>
											<div class="col-md-10 paddingads" >
												<div id="star2"><h3>'.$r['associate'].'<p></p>';
													
											$total = (int)$r['rate'];
										
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
												}else{
													echo '
													<span>&#9733;</span>
													<span>&#9733;</span>
													<span>&#9733;</span>
													<span>&#9733;</span>
													<span>&#9733;</span>';
												}
							
													
												echo '</div></h3>
												

											</div>
										</div>
										
										<div class="row">							
											<div class="col-md-12">
												<h5 >'.$r['content'].'</h5>
											</div>							
										</div>
										
										<div class="row">
											<p class=" small text-right">'.$r['date'].'</p>
										</div>
										
										<br />
										<hr style="border: solid 1px gray;"/>';
									}
								}
								else{
									echo '
									<div class="row">
								<div class="col-md-2">
									
								</div>
								<div class="col-md-10 paddingads text-center" >
									<h3>No Reviews</h3>
								</div>
							</div>';
								}
							?>
							
							
							
						
						
							
							
							
							
							
							
							
							
						
							
							
							
							
							
							
						
						
							
							
						</div>
						<div class="col-md-2">
						</div>
					</div>
				
				
			

		
			</div>
			<div class="col-md-1">
			</div>
		</div>
		
		<br/>
		
	

		<br /> <br /> <br /> <br /> <br /> <br /> <br />
		