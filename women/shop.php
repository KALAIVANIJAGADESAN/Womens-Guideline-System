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
		<h3 class="style"><a href="">Shop Product</a></h3>
			<div class="specials-grids">
            
             <?php
		$t=mysql_query("select * from product");
		while($w=mysql_fetch_array($t))
		{
		$pimage=$w['pimage'];
$pname=$w['pname'];
$sname=$w['sname'];
$contact=$w['contact'];
$price=$w['price'];
$pid=$w['pid'];
		?>
        <div class="special-grid">
						  <div class="gallery img_style">
							 <img style="height: 400px ; width : 300px" src="upload/<?php echo $pimage; ?>" title="<?php echo $pimage; ?>"></a>
						  </div>
							<h2 class="style"><a href="#"><?php echo $pname; ?></a></h2>
							<h3><?php echo $sname; ?></h3><br/>
							<p><?php echo $contact; ?></p><br/>
							<p>Rs.<?php echo $price; ?></p><br/>
                            <a href="https://www.google.com/maps/place/Coimbatore,+Tamil+Nadu/<?php echo $map; ?>"><input type="button" value="FIND ME" class="add_cart" /></a></p>
						</div>
                  <?php
				  }
				  ?>
            
            <div class="clear"> </div>
            </div>
		
		<div class="clear"></div>

	</div>
	<div class="clear"></div>
</div>
</div>
 <?php
include "footer.php";
?>
            