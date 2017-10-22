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
	
	<!-- Navbar -->
		
	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				<img src="<?php echo base_url('images/logo.png')?>" >
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right">
				
				<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a data-toggle="modal" data-target="#signup1Modal" style="cursor: pointer;">Join Us</a></li>
			</ul>
		</div>
	</nav>
	

		
	
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " >
				
				<br /> <br /> 	

				<div class="row" id="padd">
							<ul class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li><a href="#">Search</a></li>
							  <li><a href="#">Driver</a></li>
							  <li><a href="#">Lei Dian Mendoza</a></li>
							</ul>
				</div>
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-2 text-center">
						<img class="imgg"  src="<?php echo base_url('images/default.png')?>" alt="">
						<br /> <br />					
					</div>
					
					<button type="button" class="btn btn-danger">REPORT</button>
				
					<div class="col-md-4" >
						<p id="name">Lei Dian Mendoza</p>
						<p id="cat">Carpenter</p>
						<p class="text " > $750.00 per day</p>
						<p class="text "> (negotiable)</p>
							
						 
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
									<h4><span class="glyphicon glyphicon-map-marker red"></span> Dasmarinas, Cavite</p></h4>
									
								<h4>Languages Spoken: Filipino</h4>
									<button class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Certification </button>
								</div>
								<div class="col-md-6">
									<h5>To send hiring request,transact and be able to view contacts pls click:</h5>
								   <button type="button" class="hire">HIRE</button>
									
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
						<p class="rating">4.8</p>
					</div>
					<div class="col-md-3" >
								
						<div id="star">
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span>&#9733;</span>
							<span>&#9733;</span>
							<h6 style="margin-top: -5px; margin-bottom: 30px;">( 2,343 rates )</h6>
						</div>
					</div>
					<div class="col-md-2">
						<ul class="bargraph">
							<li class="five"></li>
							<li class="four"></li>
							<li class="three"></li>
							<li class="two"></li>
							<li class="one"></li>
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

							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>Celine Joy Macaraeg<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
							
							
						
							<div class="row" id="padh5">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							<div class="row">
								<p class=" small text-right"> 09-17-17 | 2:00 pm </p>
							</div>
							
							<br />
							
							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>John Mher Dhexs Emotin<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
							
							
						
							<div class="row" id="padh5">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							<div class="row">
								<p class=" small text-right"> 09-17-17 | 2:00 pm </p>
							</div>
							<br />
							
							<div class="row">
								<div class="col-md-2">
									<a href="#"><img width=" 90px" height="90px" src="images/default.png" /></a>
								</div>
								<div class="col-md-10 paddingads" >
									<div id="star2"><h3>Celine Joy Macaraeg<p style="font-size:16px; padding-top:0px;">Tondo, Manila</p>
									
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span class="checked">&#9733;</span>
										<span>&#9733;</span>
										<span>&#9733;</span>
									</div></h3>
									

								</div>
							</div>
							
							
						
							<div class="row" id="padh5">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							<div class="row">
								<p class=" small text-right"> 09-17-17 | 2:00 pm </p>
							</div>
							
						</div>
						<div class="col-md-2">
						</div>
					</div>
				
				
			

		
			</div>
			<div class="col-md-1">
			</div>
		</div>
	
        <br />
   
		<!-- footer -->
		
		<div class="row" id="footer">
			
			<div class="col-lg-1">
			</div>
			<div class="col-lg-1">
				</br>
				<a>About Us</a>
				<br /><a>Comments</a>
				<br /><a>Suggestions</a>
				<br />
			</div>
			<div class="col-lg-1">
				</br>
				<a>Special Offer</a>
				<br /><a>Discount</a>
				<br /><a>Freebies</a>
				<br />
			</div>
			<div class="col-lg-6 text-center">
				<br />
				<p>hiremetro © 2017 | Designed by Group 4</p>
			</div>
			<div class="col-lg-2 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt=""> facebook.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			<div class="col-lg-1">
			</div>
			
		</div>
		
	</div>