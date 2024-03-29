<?php
include "config.php";
include "header.php";
?>
	<div class="wrap">
		<div class="wrapper">	
			<div class="main">
				<div class="content">
					<a href="view_hostel.php"><h2>Women's Safety</h2></a>
				</div>

				<div class="ser-main">
					<div class="ser-grid-list img_style">
						<h3 class="style"><a href="">Add Hostel</a></h3>
							<div class="contact-form">
								<form method="POST" action="" name="add_hostel" enctype="multipart/form-data">
									<div>
										<span><label>Hostel Name</label></span>
										<span><input name="hname" type="text" class="textbox"></span>
									</div>
									
									<div>
										<span><label>Hostel Owner Name</label></span>
										<span><input name="oname" type="text" class="textbox"></span>
									</div>
								 
									<div>
										<span><label>Hostel Owner Contact</label></span>
										<span><input name="ocontact" type="text" class="textbox"></span>
									</div>
								
									<div>
										<span><label>Hostel Map Link</label></span>
										<span><input name="map" type="text" class="textbox"></span>
									</div>
								  
									<div>
										<span><label>Hostel Address</label></span>
										<span><input name="address" type="text" class="textbox"></span>
									</div>
									
									<div>
										<span><label>Hostel Location</label></span>
										<span><input name="location" type="text" class="textbox"></span>
									</div>
								 
									<div>
										<span><label>Hostel Image</label></span>
										<span><input name="pimg" type="file" class="textbox"></span>
									</div>
								   
									<div>
										<span><label>Hostel Warden Name</label></span>
										<span><input name="wname" type="text" class="textbox"></span>
									</div>
									
									<div>
										<span><label>Hostel Warden Contact</label></span>
										<span><input name="wcontact" type="text" class="textbox"></span>
									</div>
								
									<div>
										<span><label>Hostel Opening Time</label></span>
										<span><input name="otime" type="time" style="height: 40px ; width: 330px ; background-color: lightgrey"></span>
									</div>
								
									<div>
										<span><label>Hostel Closing Time</label></span>
										<span><input name="ctime" type="time" style="height: 40px ; width: 330px ; background-color: lightgrey"></span>
									</div>
								
									<div>
										<span><input type="submit" value="Add Hostel" name="submit" ></span>
									</div>
								 
								</form>
							</div>
					</div>
						<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
 <?php
if(isset($_POST['submit']))
{
$hname=mysql_real_escape_string($_POST['hname']);
$oname=mysql_real_escape_string($_POST['oname']);
$ocontact=mysql_real_escape_string($_POST['ocontact']);
$map=$_POST['map'];
$address=$_POST['address'];
$location=$_POST['location'];
$pimage=$_FILES['pimg']['name'];
$wname=$_POST['wname'];
$wcontact=$_POST['wcontact'];
$otime=$_POST['otime'];
$ctime=$_POST['ctime'];

mysql_query("insert into hostel(hname, oname, ocontact, map, address, location, pimg, wname, wcontact, otime, ctime)values('$hname','$oname','$ocontact','$map','$address','$location','$pimage','$wname','$wcontact','$otime','$ctime')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Hostel details added Successfull and click 'OK' Button for continue to View the added details');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_hostel.php">';
}
include "footer.php";
?>
	