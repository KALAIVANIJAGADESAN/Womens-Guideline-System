<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="index.php"><h2>Women's Safety</h2></a>
		</div>

		<h3 class="style"><a href="">View Product</a></h3>
			<div class="specials-grids">
            
             <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Product name</td><td>Product Description</td><td>Product image</td><td>Expired Date</td><td>Price</td><td>Shop Name</td><td>Shop Address</td><td>Shop Location</td><td>Action</td></tr>
          <?php
		  $sid=$_SESSION['sid'];
		  if($sid!='')
		  {
		$u=mysql_query("select * from product where sid='$sid'");
		}
		else
		{
		$u=mysql_query("select * from product");
		}
		while($y=mysql_fetch_array($u))
		{

		
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$pimage=$y['pimage'];
$date=$y['date'];
$price=$y['price'];
$pid=$y['pid'];
$sname=$y['sname'];
$address=$y['address'];
$location=$y['location'];

		
echo "<tr><td>$pname</td><td>$pdescp</td><td><img src='upload/$pimage' width='100px'/></td><td>$date</td><td>$price</td><td>$sname</td><td>$address</td><td>$location</td><td><a href='view_product.php?pid=$pid'>Delete</a></td></tr>";
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
if($_GET['pid']!='')
{
$pid=$_GET['pid'];
mysql_query("delete from product where pid='$pid'");
echo "<script type='text/javascript'>alert('Product deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}
include "footer.php";
?>
