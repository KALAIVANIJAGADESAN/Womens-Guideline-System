<?php
include "config.php";
include "header.php";
?>
	<div class="wrap">
		<div class="wrapper">	
			<div class="main">
				<div class="content">
					<a href="view_helpline.php"><h2>Women's Safety</h2></a>
				</div>

				<div class="ser-main">
					<div class="ser-grid-list img_style">
						<h3 class="style"><a href="">Add Helpline</a></h3>
							<div class="contact-form">
								<form method="POST" action="" name="add_helpline" enctype="multipart/form-data">
									<div>
										<span><label>Helpline Name</label></span>
										<span><input name="hname" type="text" class="textbox"></span>
									</div>
									
									<div>
										<p>Helpline Type</p>
										<input type="radio" id="html" name="htype" value="Child Help Line">
										<label for="html">Child Help Line</label><br><br>
										<input type="radio" id="css" name="htype" value="Women's Police Station">
										<label for="css">Women's Police Station</label><br><br>
									</div>
								 
									<div>
										<span><label>Helpline Emergency Contact</label></span>
										<span><input name="hcontact" type="text" class="textbox"></span>
									</div>
								
									<div>
										<span><label>Helpline Address</label></span>
										<span><input name="haddress" type="text" class="textbox"></span>
									</div>
									
									<div>
										<span><label>Helpline Location</label></span>
										<span><input name="hlocation" type="text" class="textbox"></span>
									</div>
								 
									<div>
										<span><label>Head Name</label></span>
										<span><input name="hename" type="text" class="textbox"></span>
									</div>
								   
									<div>
										<span><label>Head Contact</label></span>
										<span><input name="hecontact" type="text" class="textbox"></span>
									</div>
									
									<div>
										<span><label>Head Address</label></span>
										<span><input name="headdress" type="text" class="textbox"></span>
									</div>
								
									<div>
										<span><input type="submit" value="Add Helpline" name="submit" ></span>
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
$htype=mysql_real_escape_string($_POST['htype']);
$hcontact=mysql_real_escape_string($_POST['hcontact']);
$haddress=$_POST['haddress'];
$hlocation=$_POST['hlocation'];
//$pimage=$_FILES['pimg']['name'];
$hename=$_POST['hename'];
$hecontact=$_POST['hecontact'];
$headdress=$_POST['headdress'];

mysql_query("insert into helpline(hname, htype, hcontact, haddress, hlocation, hename, hecontact, headdress)values('$hname','$htype','$hcontact','$haddress','$hlocation','$hename','$hecontact','$headdress')")or die(mysql_error());
//move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Helpline details added Successfull and click 'OK' Button for continue to View the added details');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_helpline.php">';
}
include "footer.php";
?>
	