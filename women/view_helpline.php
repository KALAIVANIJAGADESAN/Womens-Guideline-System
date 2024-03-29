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
							<tr><td>Helpline Name</td><td>Helpline Type</td><td>Helpline Contact</td><td>Helpline Address</td><td>Helpline Location</td><td>Head Name</td><td>Head Contact</td><td>Head Address</td><td>Action</td></tr>
								<?php
								  $sid=$_SESSION['sid'];
								if($sid!='')
									{
										$u=mysql_query("select * from helpline where heid='$heid'");
									}
								else
									{
										$u=mysql_query("select * from helpline");
									}
										while($y=mysql_fetch_array($u))
									{

							
										$hname=$y['hname'];
										$htype=$y['htype'];
										$hcontact=$y['hcontact'];
										$haddress=$y['haddress'];
										$hlocation=$y['hlocation'];
										//$pimage=$y['pimage'];
										$heid=$y['heid'];
										$hename=$y['hename'];
										$hecontact=$y['hecontact'];
										$headdress=$y['headdress'];

												
										echo "<tr><td>$hname</td><td>$htype</td><td>$hcontact</td><td>$haddress</td><td>$hlocation</td><td>$hename</td><td>$hecontact</td><td>$headdress</td><td><a href='view_helpline.php?heid=$heid'>Delete</a></td></tr>";
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
		if($_GET['heid']!='')
			{
				$heid=$_GET['heid'];
				mysql_query("delete from helpline where heid='$heid'");
				echo "<script type='text/javascript'>alert('Helpline details deleted successfully');</script>";
				echo '<meta http-equiv="refresh" content="0;url=view_helpline.php">';
			}
				include "footer.php";
		?>
