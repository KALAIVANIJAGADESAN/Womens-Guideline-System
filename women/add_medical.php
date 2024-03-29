<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="view_medical.php"><h2>Women's Safety</h2></a>
		</div>

<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Add Medical Shop </a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="add_product" enctype="multipart/form-data">
						    <div>
						    	<span><label>Shop Name</label></span>
						    	<span><input name="shname" type="text" class="textbox"></span>
						    </div>
							
                            <div>
						    	<span><label>Shop Location</label></span>
						    	<span><input name="shlocation" type="text" class="textbox"></span>
						    </div>
                                   
                            <div>
						    	<span><label>Shop Contact</label></span>
						    	<span><input name="shcontact" type="text" class="textbox"></span>
						    </div>
                                         
							<div>
								<p>Available Time</p>
								<input type="radio" id="html" name="time" value="12 hrs">
								<label for="html">12 Hrs</label><br>
								<input type="radio" id="css" name="time" value="24 * 7 hrs">
								<label for="css">24 * 7 Hrs</label><br><br>
							</div>
							
							 <div>
						     	<span><label>Shop Image</label></span>
						    	<span><input name="pimg" type="file" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>Shop Owner Name</label></span>
						    	<span><input name="shoname" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>Shop Owner Address</label></span>
						    	<span><input name="shoaddress" type="text" class="textbox"></span>
						    </div>
							
						     <div>
						     	<span><label>Shop Owner Contact</label></span>
						    	<span><input name="shocontact" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Add Medical" name="submit" ></span>
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
$shname=mysql_real_escape_string($_POST['shname']);
$shlocation=mysql_real_escape_string($_POST['shlocation']);
$shcontact=mysql_real_escape_string($_POST['shcontact']);
$time=$_POST['time'];
$pimage=$_FILES['pimg']['name'];
$shoname=$_POST['shoname'];
$shoaddress=$_POST['shoaddress'];
$shocontact=$_POST['shocontact'];

mysql_query("insert into madical(shname,shlocation,shcontact,time,pimage,shoname,shoaddress,shocontact)values('$shname','$shlocation','$shcontact','$time','$pimage','$shoname','$shoaddress','$shocontact')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Medical details added Successfull and click 'OK' Button for continue to View the added details');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_medical.php">';
}
include "footer.php";
?>
            