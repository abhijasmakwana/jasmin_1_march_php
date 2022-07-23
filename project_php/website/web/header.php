<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Car Rental An Auto mobile Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.flipster.css">
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile">
                    <?php
						if(isset($_SESSION['Client_id']))
							
						{
						?>
						<a class="btn btn-default log-bar" href="logout" role="button">Logout</a>
                        <a class="btn btn-default log-bar" href="profile" role="button">Welcome : <?php echo $_SESSION['Name'];?></a>
		<div class="header_left">
		               <?php
						}
						else
						{
						?>
							<a class="btn btn-default log-bar" href="register" role="button">Register</a>
							<a class="btn btn-default log-bar" href="login" role="button">Login</a>
						<?php
						}
						?>
			<ul>
				<li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
			</ul>
		</div>
		<div class="header_right">
		      <div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					
				</div>

                  
		</div>
		<div class="clearfix"></div>
</div>
<!-- //header -->
	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span class="logo-c">C</span><i class="fa fa-car" aria-hidden="true"></i>Rental</a><p class="sub-cap">Drive to Any where</p></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="hvr-underline-from-center active">Home</a></li>
							<li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
							<li><a href="#service" class="hvr-underline-from-center scroll">Deals</a></li>
							<li><a href="#team" class="hvr-underline-from-center scroll">Team</a></li>
							<li><a href="#gallery" class="hvr-underline-from-center scroll">Latest Cars</a></li>
							<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>

		</div>
		<div class="clearfix"></div>
		<h2>Coming Soon</h2>
		<h3>We are ready to launch our New Car</h3>
			<!--timer-->
						<div class="agileits-timer"> 
							<div class="main-title">
						     <div class="demo2"></div>
						</div>
						</div>
						
						<!--//timer-->
						<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="w3l_banner_info">
									 <h4>Find Best Rental Car</h4>
									
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h4>A Reliable way to travel!</h4>
									
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									 <h4>Save time when you arrive!</h4>
								
									
								</div>
							</li>
							<li>
								<div class="w3l_banner_info">
									<h4>Rent for a month. Save $70!</h4>
									
								</div>
							</li>
						</ul>
					</div>
				</div>


	</div>