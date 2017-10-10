<!--faq-->


<nav class="navbar navbar-custom navbar-fixed-top" id="faqsnav">
		<div >
				<center><img class="center" src="<?php echo base_url('images/logo.png')?>" ></center>
				<!-- <center><img class="faqc" id="faqs" src="<?php echo base_url('images/faqs.png')?>" ></center>-->
				
		</div>	
		

	</nav>

<div class="container-fluid pagee" style="background-image: url('images/bg.png'); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">





	<div class="row" id="acc">
		
			<div class="col-md-2 ">
			</div>
			
			<div class="col-md-8">
				
			
				<div class="col-md-6">	
					<button class="accordion"  >What is Hire Metro?</button>
						<div class="panel">
						  <p>Hiremetro  is a website where  connects the customer to  employer in an easiest and convenient 
						  way and by posting an add through their mobile phone or web.</p>
						</div>

					<button class="accordion"  >How do I find employee?</button>
						<div class="panel">
						  <p>Using the search bar and inputting the kind of work, this will redirect you to the 
						  employer related to the kind of service you needed.</p>
						</div>
					<button class="accordion"  >Question</button>
						<div class="panel">
						  <p>Answer</p>
						</div>
					<button class="accordion"  >Question</button>
						<div class="panel">
						  <p>Answer</p>
						</div>
				</div>
			
				<div class="col-md-6">

					<button class="accordion" >How will I know if the Employee is legit?</button>
						<div class="panel">
						  <p>By clicking the profile ad of the employee there is a button which you can download 
						  the resume as well as the credentials of the employee</p>
						</div>

					<button class="accordion" >Question</button>
						<div class="panel" >
						  <p>Answer</p>
						</div>
					<button class="accordion" >Question</button>
						<div class="panel" >
						  <p>Answer</p>
						</div>
					<button class="accordion" >Question</button>
						<div class="panel" >
						  <p>Answer</p>
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