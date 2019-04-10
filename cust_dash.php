<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["email"])) {
    header("location: cust_login.php");
    exit; 
}
else $email= $_SESSION["email"];
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
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

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
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/3.jpg">
		<div class="breadcrumb-area">
			<a href="index.php">Home</a> / <span>my dashboard</span>
		</div>
	</div>
	<!-- Page top section end -->


	<!-- Portfolio section start -->
	<!-- <section class="portfolio-section">
		<div class="sp-pad spad"> -->
			<!-- portfolio filter menu -->
			<!-- ul class="portfolio-filter controls">
				<li class="control" data-filter="*">All</li>
				<li class="control" data-filter=".photo">Photography</li>
				<li class="control" data-filter=".wedding">Weddings</li>
				<li class="control" data-filter=".land">Landscapes</li>
				<li class="control" data-filter=".port">Portraits</li>
			</ul>
		</div> -->
		<!-- <div class="portfolio-warp"> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/1.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/1.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/2.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/2.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg land" data-setbg="img/portfolio/3.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/3.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio sm-wide set-bg port" data-setbg="img/portfolio/4.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/4.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio sm-wide set-bg photo" data-setbg="img/portfolio/5.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/5.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/6.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/6.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio sm-wide set-bg land" data-setbg="img/portfolio/7.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/7.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg port" data-setbg="img/portfolio/8.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/8.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg photo" data-setbg="img/portfolio/9.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/9.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div> -->
			<!-- single item -->
			<!-- <div class="mix single-portfolio set-bg wedding" data-setbg="img/portfolio/10.jpg">
				<a href="#" class="portfolio-info">
					<div class="pfbg set-bg" data-setbg="img/portfolio/10.jpg"></div>
					<h5>Summer in the desert</h5>
					<p>Landscape Photography</p>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="sp-pad next-portfolio-link">
			<a href="#" class="arrow-btn">
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</section> -->
	<!-- Portfolio section end -->
	<form action="" method="post" name="route">
	<span class="login100-form-title p-b-59">Select Your Route</span>
	<center><select class="mdb-select md-form" searchable="Search here..">
  <option value="" disabled selected>Choose your route</option>
  <option value="1">Route 1</option>
  <option value="2">Route 2</option>
  <option value="3">Route 3</option>
</select>&nbsp;&nbsp;<b><input type="submit" class="mdb-select md-form" name="submit" value="Select" / ></b></center><br><br>
	</form>
	<form action="" method="post" name="book">
			<span class="login100-form-title p-b-59">Book Your Tickets</span>
		<select class="mdb-select md-form" searchable="Search here..">
		  	<option value="" disabled selected>Enter start stop</option>
		  	<option value="1">Route 1</option>
		  	<option value="2">Route 2</option>
		  	<option value="3">Route 3</option>
		</select>
		<select class="mdb-select md-form" searchable="Search here..">
		  	<option value="" disabled selected>Enter end stop</option>
		  	<option value="1">Route 1</option>
		  	<option value="2">Route 2</option>
		  	<option value="3">Route 3</option>
		</select>
		<select class="mdb-select md-form" searchable="Search here..">
		  	<option value="" disabled selected>Enter Fare per ticket</option>
		  	<!-- <option value="1">Route 1</option>
		  	<option value="2">Route 2</option>
		  	<option value="3">Route 3</option> -->
		  	<?php 
			for($i=1; $i<=50; $i++)
			{
			    echo "<option value=".$i.">".$i."</option>";
			}
			?> 
			 <option name="fare"> </option>
		</select>
		<select class="mdb-select md-form" searchable="Search here..">
		  	<option value="" disabled selected>Enter Quantity</option>
		  	<!-- <option value="1">Route 1</option>
		  	<option value="2">Route 2</option>
		  	<option value="3">Route 3</option> -->
		  	<?php 
			for($i=1; $i<=10; $i++)
			{
			    echo "<option value=".$i.">".$i."</option>";
			}
			?> 
			 <option name="qty"> </option> 
		</select>
		&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="mdb-select md-form" name="submit" value="Book Now" /><br><br>
	</form>


	<span class="login100-form-title p-b-59">Book Your Tickets</span>


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