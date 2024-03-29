<?php
include "config.php";
include "header.php";
?>
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="view_transport.php"><h2>Women's Safety</h2></a>
		</div>

<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Add Safe Trasport</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="add_product" enctype="multipart/form-data">
						    <div>
						    	<span><label>Transport Name</label></span>
						    	<span><input name="tname" type="text" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>Transport Description</label></span>
						    	<span><input name="tdescp" type="text" class="textbox"></span>
						    </div>
                                                                               
                            <div>
						     	<span><label>Transport No Plate</label></span>
						    	<span><input name="pimg" type="file" class="textbox"></span>
						    </div>
							
							<div>
								<p>AVAILABLE TIME</p>
								<input type="radio" id="html" name="time" value="12 hrs">
								<label for="html">12 Hrs</label><br>
								<input type="radio" id="css" name="time" value="24 * 7 hrs">
								<label for="css">24 * 7 Hrs</label><br>
							</div>
							
                             <div>
						    	<span><label>PRICE PER KM</label></span>
						    	<span><input name="price" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>OWNER NAME</label></span>
						    	<span><input name="oname" type="text" class="textbox"></span>
						    </div>
							
						     <div>
						     	<span><label>TRANSPORT ADDRESS</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
							
						     <div>
						     	<span><label>TRANSPORT LOCATION</label></span>
						    	<span><input name="location" type="text" class="textbox"></span>
						    </div>
						    
						     <div>
						     	<span><label>TRANSPORT CONTACT</label></span>
						    	<span><input name="contact" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Add Transport" name="submit" ></span>
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
$tname=mysql_real_escape_string($_POST['tname']);
$tdescp=mysql_real_escape_string($_POST['tdescp']);
$pimage=$_FILES['pimg']['name'];
$time=$_POST['time'];
$price=$_POST['price'];
$oname=$_POST['oname'];
$address=$_POST['address'];
$location=$_POST['location'];
$contact=$_POST['contact'];

mysql_query("insert into transport(tname,tdescp,pimage,time,price,oname,address,location,contact)values('$tname','$tdescp','$pimage','$time','$price','$oname','$address','$location','$contact')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Transport details added Successfull and click 'OK' Button for continue to View the added details');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_transport.php">';
}
include "footer.php";
?>
            