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

#red {
	color: red;
}
#no {
	margin-top: -20px;
}


#logo img {
	
	height: 40px;
	margin: 5px;
	margin-left: 20px;
	
}

#input {
	width: 100%;
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

.padh5 {
	padding-left: 10px;
}


#jobs h4{
	font-family: abeatbykai;
	
}

#padd {
	padding-left:25px;
	background-color: transparent;
}



#footer{
	background-color: #3b8686;
	
}

#namee {
	font-size: 25px;
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

.paddingads {
	padding-left: 5px;
}

.imgg{
	width: 150px;
	height:150px;
}

#name {
	font-size: 30px;
	text-decoration:bold;
}

#cat {
	font-size: 25px;
	color:#3b8686;
}

.text {
	font-size: 20px;
}
.hire {
	height: 40px;
	width: 150px;
	font-size: 16px;
	float: right;
	margin-top: 15px;
	color: white;
	background-color: #3b8686;
	border-radius: 5px;
}

.checked { color: #3b8686; }
#star {
	text-align: center;
	font-size: 30px; 
	position: relative;
	top: 10px;
}

#star2 {
	font-size: 30px; 
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

.rating {font-size: 60px; text-align: center;}

#emp {
	font-size: 25px;
	padding-left: 20px;
	{
		
	
.small{
	font-size:12px;
}		

</style>
<!-- homepage lol -->	
	
	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " >
				
				<br /> <br /> 	

				<div class="row" id="padd">
							<ul class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li><a href="#">Search</a></li>
							  <li><a href="#"><?php echo $client_information['fname'].' '.$client_information['lname']?></a></li>
							</ul>
				</div>
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-2 text-center">
						<img class="imgg"  src="<?php echo base_url($client_information['picture'])?>" style="border-radius: 100px;" alt="">
						<br /> <br />					
					</div>
					
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#report">REPORT</button>
				
					<div class="col-md-4" >
						<p id="name"><?php echo $client_information['fname'].' '.$client_information['lname']?></p>
						<p id="cat"><?php echo $work_details['category']?></p>
						<p class="text " >Php <?php echo $work_details['rate_price'].'.00 '.$work_details['rate_type']?></p>
						<?php
							if($work_details['negotiable'] == 'Yes'){
								echo '<p class="text "> (negotiable)</p>'; 
							}
						?>
						 
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
	
		<hr>
		
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10" style="border-style: outset;">
							<div class="row">
								<div class="col-md-12">
									<h2>Know More</h2>
								</div>
							</div>
							<hr style="border:1px solid #000"/>	
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-4">
									<h4><span class="glyphicon glyphicon-map-marker red"></span> <?php echo $client_information['location'];?></p></h4>
									
								<h4>Languages Spoken: Filipino</h4>	
									<a href="<?php echo base_url('')?>hiremetro/download/<?php echo $work_details['resume'];?>"><button class="btn btn-primary" onclick=""><span class="glyphicon glyphicon-download-alt"></span> Resume </button></a>
								</div>
								<div class="col-md-6">
									<h5>To send hiring request,transact and be able to view contacts pls click:</h5>
									<?php
										if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('ongoing') == 'no'){
											echo '<button type="button" class="hire" data-toggle="modal" data-target="#hire_pay">HIRE</button>';
										}
										elseif($this->session->userdata('ongoing') == 'yes'){
											echo '<button type="button" class="hire" data-toggle="modal" data-target="#ongoing">HIRE</button>';
										}
										else{
											echo '<a href="';echo base_url('hiremetro/signup');echo'"><button type="submit" class="hire" data-toggle="modal" data-target="#hire_pay">HIRE</button></a>';
										}
									?>
								   
									
								</div>
								<div class="col-md-1">					
								</div>	
							</div>
							
							<br />
					</div>
					<div class="col-md-1">
					</div>
				</div>
		
		<br />
		
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-1">
						<p class="rating"><?php echo number_format((float)$rating['total_rating'], 1, '.', '');?></p>
					</div>
					<div class="col-md-3" >
								
						<div id="star">
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
										}
							?>
							<h6 style="margin-top: -5px; margin-bottom: 30px;">( <?php echo $rating['no_of_rates']?> rates )</h6>
						</div>
					</div>
					<div class="col-md-2">
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
								
								echo'
									<li class="five" style="width:'.$five.'"></li>
									<li class="four" style="width:'.$four.'"></li>
									<li class="three" style="width:'.$three.'"></li>
									<li class="two" style="width:'.$two.'"></li>
									<li class="one" style="width:'.$one.'"></li>';
							?>
						</ul>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			
			<hr style="border: solid 1px gray;"/>
        
				
					<div class="row">
						<div class="col-md-5">
							<p id="emp"><b>Employer Reviews:</b></p>
						</div>
						<div class="col-md-7">
						</div>
					</div>
					
					<br />
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
					<?php
						if(isset($reviews)){
							foreach($reviews as $r){
								echo '
								

									<div class="row">
										<div class="col-md-2">
											<a href="#"><img width=" 90px" height="90px" src="';echo base_url($r['picture']); echo'" style="border-radius: 100px;" /></a>
										</div>
										<div class="col-md-10 paddingads" >
											<div id="star2"><h3>'.$r['associate'].'<br/>';
											
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
										};
											echo '</div></h3>
											

										</div>
									</div>
								
									
								
									<div class="row" id="padh5">							
										<div class="col-md-12">
											<h5 >'.$r['content'].'</h5>
										</div>							
									</div>
									<div class="row">
										<p class=" small text-right">'.$r['date'].'</p>
									</div>
									<hr style="border: 1px solid lightgray">
									<br />';
							}
						}
						else{
							echo '
							<div class="row">
										<div class="col-md-2">
										</div>
										<div class="col-md-10 paddingads text-center" >
											<h3 style="color: teal"><b>No Reviews Yet</b></h3>
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
	
        <br />

		<!-- Modal for paying for hire-->
		<div class="modal fade" id="hire_pay" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> Want to hire this employee ? </h4>
						<p>Just pay the 5% downpayment !</p>
					</div>
					<div class="modal-body text-center">
						<?php echo validation_errors(); ?>
						<form action="<?php echo base_url('hiremetro/hire_employee');?>" method="post">
						<input type="text" name="card_number" placeholder="Card Number">
						<input type="text" name="expiration" placeholder="MM/DD">
						<input type="text" name="cvv" placeholder="CCV">
						<br/>
						<br/>
						<p> Employee Rate : Php <?php echo $work_details['rate_price'] ?>.00 </p>
						<p> 20% of Employee Rate : Php
						<?php  
							$down = 0;
							$rate = $work_details['rate_price'];
							
							$down = $rate*0.20;
							
							echo $down;
						?>.00 </p>
						<p> Total Payment: Php<?php echo $down; $this->session->set_userdata('down', $down);?>.00</p>
						<div class="w3-panel w3-teal">
						  <p>! By click "Pay" you agree to our customer's terms and conditions</p>
						</div> 
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="w3-btn w3-hover-teal w3-white" name="associate" value="<?php echo $client_information['client_id'];?>">Pay</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal for paying for ongoing-->
		<div class="modal fade" id="ongoing" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> Oopppsss ! </h4>
						<p></p>
					</div>
					<div class="modal-body text-center">
						<p> It looks like you still have an ongoing transaction ! </p>
					</div>
					<div class="modal-footer text-center">
						<button class="w3-btn w3-hover-teal w3-white" data-dismiss="modal">Ok</button>
						</form>
					</div>
				</div>
			</div>	
		</div>
		
		<!-- Modal content-->
		
		<div class="modal fade" id="report" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> REPORT </h4>
						<p></p>
					</div>
					<div class="modal-body text-center">
						<form action="<?php echo base_url('hiremetro/send_report')?>" method="post">
						<div class="form-group">
							<h4>Body</h4>
							<textarea placeholder="Report" name="content" value=""></textarea>
						</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default center-block" name="client_id" value="<?php echo $client_information['client_id']?>">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>