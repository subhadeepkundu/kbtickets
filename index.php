<?php include('db_connect.php');
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KB Tickets</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">KB Tickets</h3>

		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">about us</a></li>
				<?php 
				if (!isset($_SESSION["email"])) {?><li><a href="cust_sign.php">Sign Up</a></li><?php }
                    else{ 
$email= $_SESSION["email"]; $results = mysqli_query($conn, "SELECT * FROM customer where email='$email'"); 
                          $rowf = mysqli_fetch_array($results);?><li><a href="cust_dash.php"><b>hi,&nbsp;<?php echo $rowf['name'];?></b></a></li><?php } ?>
				
				<!-- <li><a href="cust_login.php">Sign In</a></li> -->
				<?php 
				if (!isset($_SESSION["email"])) {?><li><a href="cust_login.php">Sign In</a></li><?php }
                    else{ ?><li><a href="logout_cust.php"><b>logout</b></a></li><?php } ?>
                 <?php 
				if (isset($_SESSION["email"])) {?><li><a href="cust_dash.php"><b>MY dashboard</b></a></li><?php }?>
<!-- 				<li><a href="blog.html">Blog</a></li> -->
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Hero section start -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					<h2 class="hs-title">KB Tickets</h2>
					<p class="hs-des">We Create Your Bus Ride <br>Hassle-Free and Smoother</p>
				</div>
			</div>
			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/2.jpg">
				<div class="hs-text">
					<h2 class="hs-title">KB Tickets</h2>
					<p class="hs-des">We Create Your Bus Ride <br>Hassle-Free and Smoother</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Intro section start -->
	<section class="intro-section sp-pad spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 intro-text">
					<span class="sp-sub-title">KB Tickets</span>
					<h3 class="sp-title">What do we do?</h3>
					<p>Our previous work helped people by providing travel solutions. Our aim is to make travel for commuters as simplified as possible.</p>
				</div>
				<div class="col-xl-7 offset-xl-1">
					<figure class="intro-img mt-5 mt-xl-0">
						<img src="img/intro.jpg" alt="">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->

	<!-- Contact section start -->
	<section class="contact-section set-bg spad" data-setbg="img/contact-bg.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<span class="sp-sub-title">KB Tickets - Online Ticketing Solution</span>
					<h3 class="sp-title">Stay in touch</h3>
					<p>Get in touch with us if you have any queries regarding ticketing or if you have faced any issues.</p>

					<ul class="con-info">
						<li><i class="flaticon-phone-call"></i>+033 24224562</li>
						<li><i class="flaticon-envelope"></i>kbtickets@gmail.com</li>
						<li><i class="flaticon-placeholder"></i>17 Lal Dighi,Dalhousie Square<br> Kolkata,West Bengal</li>
					</ul>
				</div>
			</div>
			<div class="container p-0">
				<div class="row">
					<div class="col-xl-8 offset-xl-4">
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="email" placeholder="E-mail">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Subject">
									<textarea placeholder="Message"></textarea>
									<button class="site-btn light">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->


		<!-- Footer section start -->
	<footer class="footer-section spad">
		<div class="container text-center">
			<h2>Feel Free To Reach Us!</h2>
			<p>kbtickets@gmail.com</p>
			<div class="social">
				<a ><i class="fa fa-pinterest"></i></a>
				<a ><i class="fa fa-facebook"></i></a>
				<a ><i class="fa fa-twitter"></i></a>
				<a ><i class="fa fa-dribbble"></i></a></br>


</br>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a>KB Tickets</a>

			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main1.js"></script>
</body>
</html>