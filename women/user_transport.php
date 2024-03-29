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

		<h3 class="style"><a href="">View Transport</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Transport name</td><td>Transport Description</td><td>Transport image</td><td>Available Time</td><td>Price Per KM</td><td>Owner Name</td><td>Transport Address</td><td>Transport Location</td><td>Transport Contact</td></tr>
          <?php
		  $sid=$_SESSION['sid'];
		  if($sid!='')
		  {
		$u=mysql_query("select * from transport where tid='$tid'");
		}
		else
		{
		$u=mysql_query("select * from transport");
		}
		while($y=mysql_fetch_array($u))
		{
			
$tname=$y['tname'];
$tdescp=$y['tdescp'];
$pimage=$y['pimage'];
$time=$y['time'];
$price=$y['price'];
$tid=$y['tid'];
$oname=$y['oname'];
$address=$y['address'];
$location=$y['location'];
$contact=$y['contact'];

echo "<tr><td>$tname</td><td>$tdescp</td><td><img src='upload/$pimage' width='100px'/></td><td>$time</td><td>$price</td><td>$oname</td><td>$address</td><td>$location</td><td>$contact</td></tr>";
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
include "footer.php";
?>
