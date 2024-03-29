<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>WOMEN'S SAFETY</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--start slider -->
	<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="js/camera.min.js"></script> 
    
    <script>
		jQuery(function(){
			jQuery('#camera_wrap_1').camera({
				height: '550px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
	
</head>
<body>
<div style="float:right; text-align:right; position:relative; right:0px;">
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,ta', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<div class="slider">
	<!-- #camera_wrap_1 -->
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div  data-src="images/gh.jpg">
            </div>
            <div  data-src="images/women.jpg">
            </div>
            <div  data-src="images/4378783.jpg">
            </div>
             </div><!-- #camera_wrap_1 -->
         <div class="clear"></div>
	</div>
	<!-- end #camera_wrap_1 -->
</div>
<div class="header_bg">
<div class="wrap">
<div class="wrapper1">	
	<div class="menu">	
				<ul class="top-nav">
                <?php
				$fn1=basename($_SERVER['SCRIPT_FILENAME']);
				$fn2=explode(".",$fn1);
				$fn=$fn2[0];
				?>
					 <li  <?php if($fn=='index' || $fn=='') echo 'class="active"' ?> ><a href="index.php">HOME</a></li>
                     <?php
					 if(($_SESSION['sid']=='')&&($_SESSION['uid']=='')&&($_SESSION['id']==''))
					 {
					 ?>
					    <li <?php if($fn=='admin') echo 'class="active"' ?>><a class="hsubs" href="admin.php">ADMIN LOGIN</a></li>
						<li <?php if($fn=='buyer_register') echo 'class="active"' ?>><a class="hsubs" href="buyer_register.php">NEW</a></li>
						<li <?php if($fn=='buyer_login') echo 'class="active"' ?>><a class="hsubs" href="buyer_login.php">EXISTING</a></li>
						<li <?php if($fn=='seller_register') echo 'class="active"' ?>><a class="hsubs" href="contact.php">CONTACT</a></li>

                      
                      <?php
					  }
					  if(isset($_SESSION['id']))
					  {
					  ?>
				
								<li <?php if($fn=='add_products') echo 'class="active"' ?>><a class="hsubs" href="add_products.php">ADD PRODUCT</a></li>
								<!-- <li <?php if($fn=='view_product') echo 'class="active"' ?>><a class="hsubs" href="view_product.php">VIEW PRODUCT</a></li> -->
							
								<li <?php if($fn=='add_transport') echo 'class="active"' ?>><a class="hsubs" href="add_transport.php">ADD TRANSPORT</a></li>
								<!-- <li <?php if($fn=='view_transport') echo 'class="active"' ?>><a class="hsubs" href="view_transport.php">VIEW TRANSPORT</a></li> -->
						
								<li <?php if($fn=='add_medical') echo 'class="active"' ?>><a class="hsubs" href="add_medical.php">ADD MEDICALS</a></li>
								<!-- <li <?php if($fn=='') echo 'class="active"' ?>><a class="hsubs" href=".php">VIEW MADICALS</a></li> -->
						
								<li <?php if($fn=='add_hostel') echo 'class="active"' ?>><a class="hsubs" href="add_hostel.php">ADD HOSTELS</a></li>
								<!-- <li <?php if($fn=='') echo 'class="active"' ?>><a class="hsubs" href=".php">VIEW HOSTELS</a></li> -->
							
								<li <?php if($fn=='add_helpline') echo 'class="active"' ?>><a class="hsubs" href="add_helpline.php">ADD HELPLINE</a></li>
								<!-- <li <?php if($fn=='') echo 'class="active"' ?>><a class="hsubs" href=".php">VIEW HELPLINE</a></li> -->
							
								<li <?php if($fn=='admindashboard') echo 'class="active"' ?>><a class="hsubs" href="admindashboard.php">VIEW USER</a></li>

								<li><a href="logout.php">LOGOUT</a></li>
                      <?php
					  }
					  if(isset($_SESSION['sid']))
					  {
					  ?>
						<li <?php if($fn=='seller_profile') echo 'class="active"' ?>><a class="hsubs" href="seller_profile.php">FARMER PROFILE</a></li>
                        <li <?php if($fn=='view_product') echo 'class="active"' ?>><a class="hsubs" href="view_product.php">VIEW PRODUCT</a></li>
						<li <?php if($fn=='invoice') echo 'class="active"' ?>><a class="hsubs" href="invoice.php">INVOICE</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
                      <?php
					  }
					  if(isset($_SESSION['uid']))
					  {
					  ?>
						<li <?php if($fn=='buyer_profile') echo 'class="active"' ?>><a class="hsubs" href="buyer_profile.php">USER PROFILE</a></li>
						<li <?php if($fn=='shop') echo 'class="active"' ?>><a class="hsubs" href="shop.php">SHOP PRODUCT</a></li>
						<li <?php if($fn=='user_transport') echo 'class="active"' ?>><a class="hsubs" href="user_transport.php">TRANSPORTS</a></li>
						<li <?php if($fn=='user_madical') echo 'class="active"' ?>><a class="hsubs" href="user_madical.php">MADICALS</a></li>
						<li <?php if($fn=='user_hostel') echo 'class="active"' ?>><a class="hsubs" href="user_hostel.php">HOSTELS</a></li>
						<li <?php if($fn=='user_helpline') echo 'class="active"' ?>><a class="hsubs" href="user_helpline.php">HELPLINES</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
                      <?php
					  }
					  ?>
                      <div class="clear"></div>
				</ul>

        
		
		<div class="clear"></div>
	</div>
</div>
</div>
</div>

<!-- start main -->
<div class="main_bg">
