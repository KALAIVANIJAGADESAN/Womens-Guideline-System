<?php
include "config.php";
include "header.php";
?>
	<div class="wrap">
		<div class="wrapper">	
			<div class="main">
				<div class="content">
					<h2>Women's Safety</h2>
				</div>

				<h3 class="style"><a href="">View Hostel</a></h3>
					<div class="specials-grids">
					
						<table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
							<tr><td>Hostel Name</td><td>Hostel Image</td><td>Hostel Owner Name</td><td>Hostel Owner Contact</td><td>Hostel Address</td><td>Hostel Location</td><td>Hostel Warden Name</td><td>Hostel Warden Contact</td><td>Gate Opening Time</td><td>Gate closing Time</td><td>Action</td></tr>
								<?php
								  $sid=$_SESSION['sid'];
								if($sid!='')
									{
										$u=mysql_query("select * from hostel where hid='$hid'");
									}
								else
									{
										$u=mysql_query("select * from hostel");
									}
										while($y=mysql_fetch_array($u))
									{

							
										$hname=$y['hname'];
										$oname=$y['oname'];
										$ocontact=$y['ocontact'];
										$address=$y['address'];
										$location=$y['location'];
										$pimage=$y['pimage'];
										$hid=$y['hid'];
										$wname=$y['wname'];
										$wcontact=$y['wcontact'];
										$otime=$y['otime'];
										$ctime=$y['ctime'];

												
										echo "<tr><td>$hname</td><td><img src='upload/$pimage' width='100px'/></td><td>$oname</td><td>$ocontact</td><td>$address</td><td>$location</td><td>$wname</td><td>$wcontact</td><td>$otime</td><td>$ctime</td><td><a href='view_hostel.php?hid=$hid'>Delete</a></td></tr>";
									}
								?>
						</table>
					   
						<div class="clear"> </div>
					</div>

			</div>
			<div class="clear"></div>
		</div>
	</div>
		<?php
		if($_GET['hid']!='')
			{
				$hid=$_GET['hid'];
				mysql_query("delete from hostel where hid='$hid'");
				echo "<script type='text/javascript'>alert('Hostel details deleted successfully');</script>";
				echo '<meta http-equiv="refresh" content="0;url=view_medical.php">';
			}
				include "footer.php";
		?>
