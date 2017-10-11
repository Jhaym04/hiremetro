
	
	
		<!-- Navbar -->
    
  <nav class="navbar navbar-custom navbar-fixed-top">
    <div class="navbar-header" id="logo" >
        <img src="<?php echo base_url('images/logo.png')?>">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
    </div>  
    
    <div class="collapse navbar-collapse" id="myNavbar">
    
      <ul class="nav navbar-nav navbar-right">
				<?php
					
					if($this->session->userdata('logged_in') == TRUE){
						echo '
						<li><a href="'; echo base_url('hiremetro'); echo '"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a href="#"  style="margin-right: 20px;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> '.$this->session->userdata('username').' </a>
							<ul class="dropdown-menu">
								<li><a href="'; echo base_url('hiremetro/view_profile'); echo '">Profile <span style="color: black;" class="glyphicon glyphicon-user"></span></a></li>
								<li><a href="'; echo base_url('hiremetro/logout'); echo'"> Logout <span style="color: black;" class="glyphicon glyphicon-off"></span></a></li>
							</ul>
						</li>';
					}else{
						echo '
						<li><a href="'; echo base_url('hiremetro'); echo '"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a data-toggle="modal" data-target="#signup1Modal" style="cursor: pointer;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a data-toggle="modal" data-target="#loginModal" style="margin-right: 20px; cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> ';
					};
				?>
	  </ul>
    </div>
  </nav>
	
	<div class="container-fluid pagee" style="background-image: url('images/bg.png');">
		
		
	


   
           

     

    <!--intro-->
      <div class="row">
        <div class="col-md-6" id="about_head">
          <img class="img-fluid rounded mb-4" src="<?php echo base_url('images/i1.jpg');?>" alt="">
        </div>
        <div class="col-lg-6">
          <h2 style="font-family:Verdana; color:green;">HIRE METRO </h2>
          <p class="lead">Hiremetro  connects the customer to  employer in an easiest and convenient way and by posting an add through their mobile phone or web.</p>
          <p class="lead">Hiremetro offers a wide range of services includes (kinds of works). </p>
          <p class="lead">Hiremetro team believes and improves lives, employer can easily find a customer by simply posting an ad of their services. thus, giving
				the naghahanap an oppurtunity to find a better employer of all the choices.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2 style="font-family:verdana; color: green;">Our Team</h2>

    <div class="row" id="about_team">
        <div class="col-md-4 ">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="<?php echo base_url('images/jm.jpeg');?>" alt="" style="border-radius: 50%;width: 80%;">
            <div class="card-body">
              <h4 class="card-title lead">John Mher Emotin</h4>
              <h6 class="card-subtitle mb-2 text-muted">Leader</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila | Navotas Metro Manila</p>
            </div>
             <div class="card-footer">
              <a href="#">ejohnmherm@gmail.com</a>
          </div>
        </div>
		</div>
        
        
        <div class="col-md-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="<?php echo base_url('images/czar.jpeg')?>" alt=" Jhon Emotin" style="border-radius: 50%;width: 80%;">
            <div class="card-body">
              <h4 class="card-title lead">Czar Joshua Mamawan</h4>
              <h6 class="card-subtitle mb-2 text-muted">Member</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila|  San Fernando Pampanga</p>
            </div>
            <div class="card-footer">
              <a href="#">czarjoshuamamawan@rocketmail.com</a>
            </div>
          </div>
		 </div>
        
        
        <div class="col-md-4 ">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="<?php echo base_url('images/cel.jpeg')?>" alt="Celine Macaraeg" style="border-radius: 50%;width: 80%;">
            <div class="card-body">
              <h4 class="card-title lead">Celine Joy Macaraeg</h4>
              <h6 class="card-subtitle mb-2 text-muted">Member</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila | Bacoor Cavite.</p>
            </div>
            <div class="card-footer">
              <a href="#"> celinemacaraeg@gmail.com</a>
            </div>
          </div>
        </div>
	</div>
		<div class="row">
        <div class="col-md-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="<?php echo base_url('images/navs.jpeg');?>" alt="Christian Navarro" style="border-radius: 50%;width: 80%;">
            <div class="card-body">
              <h4 class="card-title lead">Christian James D. Navarro</h4>
              <h6 class="card-subtitle mb-2 text-muted">Member</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila | General Trias Cavite</p>
            </div>
            <div class="card-footer">
              <a href="#">navarrochristianjames@gmail.com</a>
            </div>
          </div>
		 </div>
        

        <div class="col-md-4 mb-4">
          <div class="card h-100 text-center">
            <img class="card-img-top" src="<?php echo base_url('images/lei.jpeg')?>" alt="Lei Dian" style="border-radius: 50%;width: 80%;">
            <div class="card-body">
              <h4 class="card-title lead">Lei Dian</h4>
              <h6 class="card-subtitle mb-2 text-muted">Member</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila | Dasmarinas Cavite</p>
            </div>

            <div class="card-footer">
              <a href="#">leidian@gmail.com</a>
            </div>
          </div>
		 </div>
        
        <div class="col-lg-4 mb-4">
          <div class="card h-100 text-center">  
            <img class="card-img-top" src="<?php echo base_url('images/mar.jpeg')?>" alt="Elvin Marin" style="border-radius: 50%;  width: 80%;"  >
            <div class="card-body">
              <h4 class="card-title lead">Elvin Marin</h4>
              <h6 class="card-subtitle mb-2 text-muted">Member</h6>
              <p class="card-text"> A 3rd Year Student taking up Bachelor of Science in Information Technology at Technological University of the Philippines,Manila | Tondo Manila </p>
            </div>
            <div class="card-footer">
              <a href="#">elvinmarin08@yahoo.com</a>
            </div>
          </div>
        </div>
	</div>

    

		
		
		<!-- footer -->
		
		<div class="row" id="footer">
			
			<div class="col-lg-1">
			</div>
			<div class="col-lg-1">
				</br>
				<a style="cursor: pointer;" href="<?php echo base_url('hiremetro/view_about');?>">About Us</a>
				<br /><a>Comments</a>
				<br /><a>Suggestions</a>
				<br />
			</div>
			<div class="col-lg-1">
				</br>
				<a data-toggle="modal" data-target="#specialoffersModal" style="cursor: pointer;">SpecialOffers</a>
				<br /><a data-toggle="modal" data-target="#termsofservModal" style="cursor: pointer;">TermsofService</a>
				<br /><a  href="<?php echo base_url('hiremetro/view_faqs');?>" >Faqs</a>
				<br /><a>Freebies</a>
				<br />
			</div>
			<div class="col-lg-6 text-center">
				<br />
				<p>hiremetro © 2017 | Designed by Group 4</p>
			</div>
			<div class="col-lg-2 ">
				<br />
				<p><img src="<?php echo base_url('images/fb.ico')?>" alt="">fb.com/hiremetro</p>
				<p><img src="<?php echo base_url('images/twitter.png')?>" alt=""> @hiremetro</p>
				<p><img src="<?php echo base_url('images/gmail.ico')?>" alt=""> hiremetro@gmail.com</p> 
			</div>
			<div class="col-lg-1">
			</div>
			
		</div>
		
	</div>