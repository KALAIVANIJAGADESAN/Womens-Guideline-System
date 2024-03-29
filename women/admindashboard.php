<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="#"><h2>Women's Safety</h2></a>
		</div>

		<h3 class="style"><a href="">User</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Buyer</td><td>Mobile No</td><td>Address</td><td>Pin</td><td>District</td><td>Action</td></tr>
          <?php
		$t=mysql_query("select * from userregister");
		while($j=mysql_fetch_array($t))
		{
		$uid=$j['uid'];
		$username=$j['username'];
		$mobileno=$j['mobileno'];
	$address=$j['address'];
	$pinno=$j['pinno'];
	$dist=$j['dist'];
	

		
echo "<tr><td>$username</td><td>$mobileno</td><td>$address</td><td>$pinno</td><td>$dist</td><td><a href='admindashboard.php?uid=$uid'>Delete</a></td></tr>";
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
if($_GET['uid']!='')
{
$uid=$_GET['uid'];
mysql_query("delete from userregister where uid='$uid'");
echo "<script type='text/javascript'>alert('User account deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=admindashboard.php">';
}
include "footer.php";
?>
