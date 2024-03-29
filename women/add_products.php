<?php
include "config.php";
include "header.php";
?>

<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="content">
			<a href="view_product.php"><h2>Women's Safety</h2></a>
		</div>

<div class="ser-main">
		
		
		<div class="ser-grid-list img_style">
		<h3 class="style"><a href="">Add Safety Product</a></h3>
		
			<div class="contact-form">
            
				  	
					  <form method="POST" action="" name="add_product" enctype="multipart/form-data">
						    <div>
						    	<span><label>Product Name</label></span>
						    	<span><input name="pname" type="text" class="textbox"></span>
						    </div>
							
                             <div>
						    	<span><label>Product Description</label></span>
						    	<span><input name="pdescp" type="text" class="textbox"></span>
						    </div>
                                                                               
                            <div>
						     	<span><label>Product image</label></span>
						    	<span><input name="pimg" type="file" class="textbox"></span>
						    </div>
							
							<div>
							<span><label>EXPIRED DATE</label></span>
						    	<span><input name="date" type="date" class="textbox" style="width:290px;height:30px"></span>
							</div>
							
                             <div>
						    	<span><label>PRICE</label></span>
						    	<span><input name="price" type="text" class="textbox"></span>
						    </div>
						    
						    <div>
						     	<span><label>SHOP NAME</label></span>
						    	<span><input name="sname" type="text" class="textbox"></span>
						    </div>
							
						     <div>
						     	<span><label>SHOP ADDRESS</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
							
						     <div>
						     	<span><label>SHOP LOCATION</label></span>
						    	<span><input name="location" type="text" class="textbox"></span>
						    </div>
						    
						     <div>
						     	<span><label>SHOP CONTACT</label></span>
						    	<span><input name="contact" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="Add Product" name="submit" ></span>
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
$pname=mysql_real_escape_string($_POST['pname']);
$pdescp=mysql_real_escape_string($_POST['pdescp']);
$pimage=$_FILES['pimg']['name'];
$date=$_POST['date'];
$price=$_POST['price'];
$sname=$_POST['sname'];
$address=$_POST['address'];
$location=$_POST['location'];
$contact=$_POST['contact'];

mysql_query("insert into product(pname,pdescp,pimage,date,price,sname,address,location,contact)values('$pname','$pdescp','$pimage','$date','$price','$sname','$address','$location','$contact')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Product details added Successfull and click 'OK' Button for continue to View the added details');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}
include "footer.php";
?>
            