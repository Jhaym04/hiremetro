

<!-- filter-->
	
	<?php
		if(!empty(validation_errors())){
			echo "<script> 
			 $(window).on('load',function(){
				$('#form_error').modal('show');
			});
		</script>";
		}
	?>
	
	<div class="container-fluid pagee" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
	<br />
	<br />
	<br />
		<div id= "whole" class="row ">
			
			<div class="col-md-1" >
			</div>
			
			<div class="col-md-10 ">
			
			<!--MALAKI-->
			
				<div id="left" class="col-md-7" id="paddd">
				
					<div class="row" id="padd">
						<ul class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Join Us</a></li>
						</ul>
					</div>
					
					<br/>
					
					<div class="row" style="position: relative; top: -30px;">
				
						<div class="col-md-11">
							<div class="row" style="padding-left: 30px;" id="head">
								<h1><b>Join Us</b></h1>
							</div>
							
							<div class="row" style="padding-left: 20px;">
								<h4>be part of Hiremetro by filling up this form and signing up!</h4>
								<br />
							</div>	
							
							<div class="row" style="padding-left: 70px;">
								<?php echo form_open('hiremetro/signup'); ?>
								  <input class="name" type="text" name="fname" placeholder="First Name" value="<?php echo set_value('fname'); ?>">
								  <input class="name" type="text" name="lname" placeholder="Last Name" value="<?php echo set_value('lname'); ?>"> <br />
								  <input class="info" type="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"> <br />
								  <input class="info" type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"> <br />
								  <input class="info" type="password" name="confirm_password" placeholder="Confirm Password" > <br />
							</div>
							
							<div class="row" style="padding-left: 70px; padding-right: 70px;">
								<br />
								<h5>Before clicking Sign up please make sure you agree to our <a style="text-decoration: none; cursor: pointer;" data-toggle="modal" data-target="#termsofservModal">Terms of Service</a>. You may receive e-mail from Hiremetro at any time.</h5>
							</div>

							<div class="row" style="padding-left: 100px;">
								  <label><input type="checkbox"  onchange="document.getElementById('sign').disabled = !this.checked;" /> I agree to terms of service of Hiremetro.</input>
								  <br /> <br />
								  <input type="submit" value="Sign Up" id="sign" name="signup" disabled>
								  </form>
							</div>	
							
						</div>
						<div class="col-md-1">
						</div>					
					</div>
					<br />
					
										
						
				</div>
				
				
				<!--MALIIT-->
				
				</br>
				
				<div id="right" class="col-md-5" id="borderleft">

					<div class="row" >
						<br /> <br />
						<p id="head">
							Be a <b>Customer</b>
						</p>
						<p id="content">
							Search and find hundreds of skilled laborers around Philippines Hiremetro has to offer.
						</p>
						<br />
						<p id="head">
							Be a <b>Laborer</b>
						</p>
						<p id="content">
							Want a job? Be searched and meet your own employer by making your own advertisment. Sign up now!
						</p>
						<br />
						<br />
					</div>
						
											
				</div>
									
			</div>
	
			<div class="col-md-1">
			</div>
			
		</div>
		
		<!-- Modal for Form Validation Error-->
		<div class="modal fade" id="form_error" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> SIGN UP </h4>
					</div>
					<div class="modal-body text-center">
						<?php echo validation_errors(); ?>
					</div>
					<div class="modal-footer text-center">
						<button class="w3-btn w3-hover-teal w3-black" data-dismiss="modal">Ok</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		