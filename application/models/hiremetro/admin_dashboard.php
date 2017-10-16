
<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
</script>

<div class="container-fluid" style="background-image: url('<?php echo base_url('images/bg_admin.png');?>'); min-height: 50%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; ">
    
    <br/>
    <br/>
    <br/>
       <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" >
          <ul class="nav nav-sidebar">
            <br/>
            <li class="active" ><a href="<?php echo base_url('hiremetro/admin')?>"><span class="glyphicon glyphicon-th-list"> Dashboard</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"> Profiles</a></li>
            <li><a href="<?php echo base_url('hiremetro/admin_reports')?>"><span class="glyphicon glyphicon-info-sign"> Reports</a></li>
            <li><a href="<?php echo base_url('hiremetro/admin_suggestions')?>"><span class="glyphicon glyphicon-check"> Suggestions</a></li>
            <li><a href="<?php echo base_url('hiremetro/admin_settings')?>"><span class="glyphicon glyphicon-wrench"> Settings</a></li>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
			<br/>
            <p>hiremetro © 2017 | Designed by Group 4</p>
          </ul>
        </div>
 

        <div class="col-md-2">
        </div>
        <div class="col-md-10">

   
     


        <h2 style="color: #3b8686; text-align: center;">DASHBOARD </h2>
        <table class="points_table">
            <thead>
                <tr>
                    <th class="col-xs-4">CATEGORY</th>
                    <th class="col-xs-4">No. of Submitted Ads</th>
                    <th class="col-xs-4">Total number of Ads</th>
                
                </tr>
            </thead>

            <tbody class="points_table_scrollbar">
                <tr class="odd">
                    <td class="col-xs-4"><strong>Bartender</strong></td>
                    <td class="col-xs-4"><?php echo $bartender;?></td>
                    <td class="col-xs-4"><?php echo $total;?></td>
                    
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Carpenter</strong></td>
                    <td class="col-xs-4"><?php echo $carpenter;?></td>
                        
                </tr>
                
                <tr class="odd">
                    <td class="col-xs-4"><strong>Cook</strong></td>
                    <td class="col-xs-4"><?php echo $cook;?></td>
                    
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Driver</td>
                    <td class="col-xs-4"><?php echo $driver;?></td>
            
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong>Gardener</strong></td>
                    <td class="col-xs-4"><?php echo $gardener;?></td>
                
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Janitor</strong></td>
                    <td class="col-xs-4"><?php echo $janitor;?></td>
                
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong>Maid</strong></td>>
                    <td class="col-xs-4"><?php echo $maid;?></td>
                
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Masseuse</strong></td>
                    <td class="col-xs-4"><?php echo $masseuse;?></td>
                
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong>Nanny</strong></td>
                    <td class="col-xs-4"><?php echo $nanny;?></td>
                
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Plumber</strong></td>
                    <td class="col-xs-4"><?php echo $plumber;?></td>
                
                </tr>

                <tr class="odd">
                    <td class="col-xs-4"><strong>Tutor</strong></td>
                    <td class="col-xs-4"><?php echo $tutor;?></td>
                
                </tr>

                <tr class="even">
                    <td class="col-xs-4"><strong>Waiter</strong></td>
                    <td class="col-xs-4"><?php echo $waiter;?></td>
                
                </tr>

                
                
            </tbody>
        </table>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
    </div>
</div>


 
    
    
