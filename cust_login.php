<?php include('db_connect.php');
  session_start();
if (isset($_SESSION["email"])) {
    header("location: cust_dash.php");
    exit; 
}
  $nameErr = "";
    if (isset($_POST['submit'])) { 
    $email=$_POST['email'];
    $password=($_POST['password']);
    $sql="SELECT * FROM customer WHERE email='$email' and pwd='$password'";
    $result=mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
    // print_r($row); die();
     if($row)
   {
    $cust_id=$row['cust_id'];  

    $_SESSION['cust_id']=$cust_id;
    $_SESSION['email']=$email;
    header('Location: cust_dash.php');
   }
   else
   {
    $nameErr="!!!Entered username or password is incorrect";
   } 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KB Tickets</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
<!--===============================================================================================-->
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<style type="text/css">
		.fa {
  color : white;
}
	</style>
</head>
<body style="background-color: #999999;">
	
	
	<div class="limiter">
		<div style="font-size: 50px; color: #ffffff; float: left"><h3 class="site-logo">KB Tickets</h3></div>
		<a href="index.php"><div style="font-size: 50px; float: right">
					<i class="fa fa-home"></i>
				</div></a>	

		<div class="container-login100">


			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<!-- <form class="login100-form validate-form"> -->
			
				<form action="" method="post" id="frm">
					<span class="login100-form-title p-b-59">
						Sign In
					</span>
					<span ><mark><strong><i><?php echo $nameErr;?></i><strong></mark></span>

					<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
						<span class="error"><?php echo $nameErr;?></span>
					</div> -->

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email address...">
						
					
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate="Phone Number is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phno" placeholder="Phone Number...">
						<span class="error"><?php echo $phnoErr;?></span>
						<span class="focus-input100"></span>
					</div> -->

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="confpassword" placeholder="*************">
						<span class="error"><?php echo $confpasswordErr;?></span>
						<span class="focus-input100"></span>
					</div> -->

					<div class="flex-m w-full p-b-33">
						<!-- <div class="contact100-form-checkbox">

						</div> -->

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" class="login100-form-btn" name="submit" value="Sign In" style="background-color: #ea7773"/>
							
							 
							<!-- <input type="submit" name="submit"  class="btn_sub"  value="Sign In" /> -->

						</div>

						

						<a href="cust_sign.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
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
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main1.js"></script>

</body>
</html>