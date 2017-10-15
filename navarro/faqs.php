<!--faq-->

<style>
.jumbotron {
      background-color: #3b8686;
      color: #fff;

 .	}

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
.center {
	margin-top: 20px;
}

.faqc {
	padding-top: 100px;
}

.font{
	font-family: abeatbykai;
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


#logo span{
	background-color: white;


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



button.accordion {
    background-color: #ddd;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #3b8686;
	color:white;
}

button.accordion:after {
    content: '\23f5';
    color: white;	
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

#faqs {
	width: 650px;
	height: 130px;
	
}	

#acc { 
padding-top: 230px;

</style>
<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="navbar-header" id="logo" >
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
		</div>	
		
		<div class="collapse navbar-collapse" id="myNavbar">
		
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"  ></span> Home </a></li>
			</ul>
		</div>
	</nav>
	
	<div class="jumbotron text-center">
 <img src="<?php echo base_url('images/logo.png')?>" >
  <p><small>Help Desk</small></p> 
 
    <div class="input-group">
     
    </div>
 
</div>
	

<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">





	
			<div class="col-md-2 ">
			</div>
			
			<div class="col-md-8">
				
			
				<div class="col-md-6">	
					<button class="accordion"  >What is Hire Metro?</button>
						<div class="panel">
						  <p>Hiremetro  is a website where  connects the customer to  employer in an easiest and convenient 
						  way and by posting an ad through their mobile phone or web.</p>
						</div>

					<button class="accordion"  >How do I find employee?</button>
						<div class="panel">
						  <p>Using the search bar and inputting the kind of work, this will automatically redirect you to the 
						  employer related to the kind of service you needed.</p>
						</div>
					<button class="accordion"  >How will I know if the Employer is legit?</button>
						<div class="panel">
						  <p>By clicking the profile ad of the employee there is a button which you can download 
						  the resume as well as the credentials of the employee</p>
						</div>
					<button class="accordion">Is there a cost for being placed with HireMetro?</button>
						<div class="panel">
						  <p>No. HireMetro works on your behalf to locate your customer at no cost to you. To get started, create your account. </p>
						</div>
				</div>
			
				<div class="col-md-6">

					<button class="accordion" >How do i contact my clients and customers?</button>
						<div class="panel">
						  <p>Your profile must have a contact number and interested clients can also reach you through the message button.</p>
						</div>

					<button class="accordion" >As an employer, is it neccesary to post credentials and resume?  </button>
						<div class="panel" >
						  <p>Yes, to verify your personal work experience and expertise.</p>
						</div>
					<button class="accordion" >Why was my ad removed?</button>
						<div class="panel" >
						  <p>Your ad was removed because it was been reported or  its an ad for prohibited service.</p>
						</div>
					<button class="accordion" >How do I edit my account?</button>
						<div class="panel" >
						  <p>You have to Log-In to your HireMetro account,there, you can edit your personal information  and update the content of your ad </p>
						</div>
				</div>	
				<div class="col-md-1 ">
			</div>
				
			</div>
			
			

	</div>
			<br />

			


		<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].onclick = function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
			  panel.style.maxHeight = null;
			} else {
			  panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		  }
		}
		</script>

		
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