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
				<li><a href="#"><span class="glyphicon glyphicon-home"  ></span> Home </a></li>
				<li><a href="#"><span class="glyphicon glyphicon-bell"  ></span></a></li>
				<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 10px;"><span class="glyphicon glyphicon-user"></span> Account Name <b class="caret"></b></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
				    <div class="row">
					<li class="col-sm-4">
						<ul>
							<img style="border: 1px solid black; border-radius:50px;" src="images/default.png" width="100px" height="100px" />
							
							
						</ul>
					</li>
					<li class="col-sm-8">
						<ul>
							<h4><a href="#" >Lei Dian Mendoza</h4>
							<a href="#" >lei.mendoza@gmail.com</a>
							
							
							<br />
							<br />
							<button class="btn" style="background-color: #3b8686;">My Account</button>
							
							
						</ul>
					</li>
					</div>
					
					<hr>
					
					<div class="row text-right">
						<div class="col-md-8">
							
						</div>
						<div class="col-md-3">
							<button  type="button" class="btn btn-danger" > Sign Out </button>
						</div>
						<div class="col-md-1">
						</div>
					</div>
					
					
					
				</ul>
			</ul>
		</div>
	</nav>
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
		

		
		<div class="row ">
			
			<div class="col-md-1 ">
			</div>
			
			<div class="col-md-10 " >
				
				<br /> <br /> <br />	


				<div class="row" id="padd">
							<ul class="breadcrumb">
							  <li><a href="#">Profile</a></li>
							  <li><a href="#">Employer</a></li>
							  <li><a href="#">Lei Dian Mendoza</a></li>
							</ul>
				</div>
				
				<div class="row">
					
					<br /> <br />
					<div class="col-md-3">
					</div>
					
					<div class="col-md-2 text-center">
						<img class="imgg"  src="<?php echo base_url('images/default.png')?>" alt="">
											
					</div>
					
				
					<div class="col-md-4" style="padding-left: 30px;" >
					<br />
						<p id="name">Lei Dian Mendoza</p>
						<p id="cat">Employer</p>
						
							
						 
					</div>
					
					<div class="col-md-3">		
					</div>

				
				</div>	
				
				<br />
	
				<hr style="border: solid 1px gray;"/>
						
				<br />
		
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-1">
						<p style="font-size: 60px;" class="text-center">4.8</p>
					</div>
					<div class="col-md-3" >
								
						<div id="star" class="text-center">
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span class="checked">&#9733;</span>
							<span>&#9733;</span>
							<span>&#9733;</span>
							<h6 style="margin-top: -5px; margin-bottom: 30px;">( 5,35 rates )</h6>
						</div>
					</div>
					<div class="col-md-2 text-left">
						<ul class="bargraph">
							<li class="five"></li>
							<li class="four"></li>
							<li class="three"></li>
							<li class="two"></li>
							<li class="one"></li>
						</ul>
					</div>
					<div class="col-md-5">
					</div>
				</div>
			
					
					<br />
					<br />
					<br />
					
					<div class="row">
						<div class="col-md-7">
						</div>
						
						<div class="col-md-1" style="padding-right:-60px;">
							<p style="font-size: 16px;"><b>Sort by: </p></b>
						</div>
						
						<div class="col-md-3">
														
									  <select class="form-control" style="width: 200px;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									  </select>
										
						</div>
					</div>
					<br />
					
					
					<div class="row" style="padding-left: 10px; padding-right: 10px;">
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
							
							
						
							<div class="row">							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							
							<div class="row">
								<p class=" small text-right"> 09-17-17 | 2:00 pm </p>
							</div>
							
							<br />
							<hr style="border: solid 1px gray;"/>
							
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
							
							
						
							<div class="row" >							
								<div class="col-md-12">
									<h5 >Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet 
									Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet. </h5>
								</div>							
							</div>
							<div class="row">
								<p class=" small text-right"> 09-17-17 | 2:00 pm </p>
							</div>
							<br />
							<hr style="border: solid 1px gray;"/>
							
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
							
							
						
							<div class="row" >							
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
		
		<br/>
		
	</div>	

		<br /> <br /> <br /> <br /> <br /> <br /> <br />
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
			<div class="col-lg-3 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt=""> facebook.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			
			
		</div>
		
