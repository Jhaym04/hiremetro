
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>

<div class="container-fluid" style="background-image: url(<?php echo base_url('images/bg.png')?>); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; " >
    
    <br/>
    <br/>
    <br/>
       <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" >
		  <br/>
          <ul class="nav nav-sidebar">
			<div class="navbar-header" id="logo"  >
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
					<span class="icon-bar" style="background-color:#3b8686"></span>
					<span class="icon-bar" style="background-color:#3b8686"></span>
					<span class="icon-bar" style="background-color:#3b8686"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar2">
				<ul class="nav nav-sidebar" id="navbuttons" style="background-color:#3b8686">
					<li class="active" ><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_profiles')?>"><span class="glyphicon glyphicon-user"> Profiles</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
					<li><a href="<?php echo base_url('hiremetro/admin_approval')?>"><span class="glyphicon glyphicon-check"> Approval</a></li>
				</ul>
			</div>
			<br/>
			<br/>
			<br/>
			<div class="row">
				<div class="col-sm-1">
				</div>
				<div class="col-sm-10">
					<h6>hiremetro © 2017 | Designed by Group 4</h6>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
          </ul>
        </div>
 

        <div class="col-md-2">
        </div>
        <div class="col-md-10">

   
        <h2 style="color: #3b8686; text-align: center; ">DASHBOARD</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-xs-4">CATEGORY</th>
                    <th class="col-xs-4">No. of Submitted Ads</th>
                    <th class="col-xs-4">Total number of Ads</th>
                </tr>
            </thead>

            <tbody class="points_table_scrollbar">
                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=bartender">Bartender</a></strong></td>
                    <td><?php echo $category[0]['no_of_ads'] ?></td>
                    <td><?php echo $total ?></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=carpenter">Carpenter</strong></td>
                    <td><?php echo $category[1]['no_of_ads'] ?></td>
					<td></td>					
                </tr>
                
                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=cook">Cook</strong></td>
                    <td><?php echo $category[2]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=driver">Driver</td>
					<td><?php echo $category[3]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=gardener">Gardener</strong></td>
					<td><?php echo $category[4]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=janitor">Janitor</strong></td>
					<td><?php echo $category[5]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=maid">Maid</strong></td>>
					<td><?php echo $category[6]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=masseuse">Masseuse</strong></td>
					<td><?php echo $category[7]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=bartender">Nanny</strong></td>
					<td><?php echo $category[8]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=plumber">Plumber</strong></td>
					<td><?php echo $category[9]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=bartender">Tutor</strong></td>
					<td><?php echo $category[10]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong><a href="<?php echo base_url('hiremetro/admin_profiles')?>?category=waiter">Waiter</strong></td>
					<td><?php echo $category[11]['no_of_ads'] ?></td>
					<td></td>
                </tr>

                
                
            </tbody>
        </table>
    </div>
</div>


 
    
    
