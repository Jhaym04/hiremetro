
	<div class="container-fluid" >
		
		<br/>
		<br/>
		<br/>
		
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar" >
					<ul class="nav nav-sidebar">
						 <br/>
						<li><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_profiles')?>"><span class="glyphicon glyphicon-user"> Profiles</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
						<li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
						<li class="active"><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <br/>
						 <div class="row">
							 <div class="col-sm-1">
							 </div>
							 <div class="col-sm-10">
								<h6 style="color: white;">hiremetro © 2017 | Designed by Group 4</h6>
							 </div>
							 <div class="col-sm-1">
							 </div>
						</div>
					</ul>
				</div>
			</div>
			

			<div class="col-md-2">
			</div>
			
			<div class="col-md-10" >
				<div class="row" id="pad">
					<div class="col-md-1">
						<img  width="60px" height="60px" id="setlogo" src="<?php echo base_url('images/settings.png')?>">	
					</div>
					<div class="col-md-11">
						<h2>Settings</h2>
					</div>
				</div>
				
				<hr style="border: solid 2px lightgray;"/>
				
				<div class="row">
					<div class="col-md-2">
					</div>
			
					<div class="col-md-8" id="padd" >
							
						<button class="accordion" >Change Admin User</button>
							<div class="panel">
								<div class="row text-center">
								<div class "col-md-2">
								</div>
								<div class "col-md-8">
								<form action="<?php echo base_url('hiremetro/admin_settings');?>" method="post">
									<br />
									<br/>
									Username <br/>
									<input type="text" name="username" value="<?php echo $admin['username']; ?>" /> <br /><br />
									<button type="submit" class="btn btn-default">UPDATE</button>
								</form>
								<br/>
								<br/>
								<br/>
								</div>
								<div class "col-md-2">
								</div>
								</div>
							</div>
						<button class="accordion"  >Change Admin Password</button>
							<div class="panel">
								<div class="row text-center">
								<div class "col-md-2">
								</div>
								<div class "col-md-8">
								<form action="<?php echo base_url('hiremetro/admin_settings');?>" method="post">
									<br />
									<br/>
									Password <br/>
									<input type="text" name="password" value="<?php echo $admin['password']; ?>" /> <br /><br />
									<button type="submit" class="btn btn-default">UPDATE</button>
								</form>
								<br/>
								<br/>
								<br/>
								</div>
								<div class "col-md-2">
								</div>
								</div>
							</div>
						<button class="accordion"  >Change Admin Email</button>
							<div class="panel">
								<div class="row text-center">
								<div class "col-md-2">
								</div>
								<div class "col-md-8">
								<form action="<?php echo base_url('hiremetro/admin_settings');?>" method="post">
									<br />
									<br/>
									Email <br/>
									<input type="email" name="email" value="<?php echo $admin['email']; ?>" /> <br /><br />
									<button type="submit" class="btn btn-default">UPDATE</button>
								</form>
								<br/>
								<br/>
								<br/>
								</div>
								<div class "col-md-2">
								</div>
								</div>
							</div>
						<button class="accordion"  >Change Hiremetro Social Accounts</button>
							<div class="panel">
								<div class="row text-center">
								<div class "col-md-2">
								</div>
								<div class "col-md-8">
								<form action="<?php echo base_url('hiremetro/admin_settings');?>" method="post">
									<br />
									<br/>
									Facebook <br/>
									<input type="text" name="facebook" value="<?php echo $admin['facebook']; ?>" /> <br /><br />
									Twitter <br/>
									<input type="text" name="twitter" value="<?php echo $admin['twitter']; ?>" /> <br /><br />
									Gmail <br/>
									<input type="text" name="gmail" value="<?php echo $admin['gmail']; ?>" /> <br /><br />
									<button type="submit" class="btn btn-default" name="account">UPDATE</button>
								</form>
								<br/>
								<br/>
								<br/>
								</div>
								<div class "col-md-2">
								</div>
								</div>
							</div>
					</div>
					
						
					<div class="col-md-2 ">
					</div>
				</div>
			
			
			</div>
			
			
			<div class="col-md-1">
			</div>
		</div>
		
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
		
		
		


