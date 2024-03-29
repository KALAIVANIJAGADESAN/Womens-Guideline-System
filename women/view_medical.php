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

				<h3 class="style"><a href="">View Medical</a></h3>
					<div class="specials-grids">
					
						<table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
							<tr><td>Medical Shop Name</td><td>Medical Shop Location</td><td>Medical Shop Contact</td><td>Available Time</td><td>Medical Shop Image</td><td>Owner Name</td><td>Owner Address</td><td>Owner Contact</td><td>Action</td></tr>
								<?php
								  $sid=$_SESSION['sid'];
								if($sid!='')
									{
										$u=mysql_query("select * from madical where mid='$mid'");
									}
								else
									{
										$u=mysql_query("select * from madical");
									}
										while($y=mysql_fetch_array($u))
									{

							
										$shname=$y['shname'];
										$shlocation=$y['shlocation'];
										$shcontact=$y['shcontact'];
										$time=$y['time'];
										$pimage=$y['pimage'];
										$mid=$y['mid'];
										$shoname=$y['shoname'];
										$shoaddress=$y['shoaddress'];
										$shocontact=$y['shocontact'];

												
										echo "<tr><td>$shname</td><td>$shlocation</td><td>$shcontact</td><td>$time</td><td><img src='upload/$pimage' width='100px'/></td><td>$shoname</td><td>$shoaddress</td><td>$shocontact</td><td><a href='view_medical.php?mid=$mid'>Delete</a></td></tr>";
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
		if($_GET['mid']!='')
			{
				$mid=$_GET['mid'];
				mysql_query("delete from madical where mid='$mid'");
				echo "<script type='text/javascript'>alert('Medical Shop details deleted successfully');</script>";
				echo '<meta http-equiv="refresh" content="0;url=view_medical.php">';
			}
				include "footer.php";
		?>
