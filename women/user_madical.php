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

		<h3 class="style"><a href="">View Madical</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Shop name</td><td>Shop Image</td><td>Shop Location</td><td>Shop Contact</td><td>Available Time</td><td>Shop Owner Name</td><td>Shop Owner Address</td><td>Shop Owner Contact</td></tr>
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
$pimage=$y['pimage'];
$shlocation=$y['shlocation'];
$shcontact=$y['shcontact'];
$time=$y['time'];
$mid=$y['mid'];
$shoname=$y['shoname'];
$shoaddress=$y['shoaddress'];
$shocontact=$y['shocontact'];

echo "<tr><td>$shname</td><td><img src='upload/$pimage' height='150px' width='100px'/></td><td>$shlocation</td><td>$shcontact</td><td>$time</td><td>$shoname</td><td>$shoaddress</td><td>$shocontact</td></tr>";
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
