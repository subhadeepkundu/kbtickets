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
	<link href="img/favicon.jpg" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">KB Tickets</h3>
		<!-- <form class="search-top">
			<button class="se-btn"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.....">
		</form> -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">about us</a></li>
				<!-- <li><a href="#">Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="blog.html">Blog</a></li> -->
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
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/4.jpg">
		<div class="breadcrumb-area">
			<a href="index.php">Home</a> / <span>Contact</span>
		</div>
	</div>
	<!-- Page top section end -->

	<div class="map-area" id="map-canvas"></div>


	<!-- Contact section start -->
	<section class="contact-section set-bg spad" data-setbg="img/contact-bg.jpg">
		<div class="container-fluid contact-warp">
			<div class="contact-text">
				<div class="container p-0">
					<span class="sp-sub-title">KB Tickets-- ONLINE TICKETING SOLUTION</span>
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

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXtR5Dj7h6SzTuEUwBhee8wQFim8Ousw4"></script>
	<script src="js/map.js"></script>

</body>
</html>