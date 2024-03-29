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

<div class="ser-main">
<?php
$uid=$_SESSION['uid'];
$l=mysql_query("SELECT * FROM userregister WHERE uid='$uid'");
while($g=mysql_fetch_array($l))
{
	$username=$g['username'];
	$password=$g['password'];
	//$date=$g['date'];
	$mobileno=$g['mobileno'];
	$address=$g['address'];
	$pinno=$g['pinno'];
	$dist=$g['dist'];	
?>		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="#">Welcome <?php echo $username; ?></a></h3>
		
			<div class="contact-form">
            <table align="left" width="400px">
            <!--<tr><td>Date of registration</td><td>:</td><td><?php echo $date; ?></td></tr>-->
            <tr><td>Mobile number</td><td>:</td><td><?= $mobileno; ?></td></tr>
            <tr><td>Address		 </td><td>:</td><td><?= $address; ?></td></tr>
            <tr><td>Pin code	 </td><td>:</td><td><?= $pinno; ?></td></tr>
            <tr><td>Dist		 </td><td>:</td><td><?= $dist; ?></td></tr>          
            </table>
            
		    </div>
			
		</div>
<?php
}
?>		
		
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
<?php
include "footer.php";
?>