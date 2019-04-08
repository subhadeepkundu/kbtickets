<?php include('db_connect.php');
session_start();
if (isset($_SESSION["email"])) {
    header("location: cust_dash.php");
    exit; 
}
  $nameErr = $emailErr = $phnoErr  =$passwordErr = $confpasswordErr  = "";
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $phno= $_POST['phno'];
   // $college= $_POST['bal'];
    $password= $_POST['password'];
     $confpassword= $_POST['confpassword'];
     
    if (empty($name)) 
    {
      $nameErr = "Name is required"; 

    }  
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Email is required";
    } 
    else if (empty($phno)) 
    {
      $phnoErr = "Phone is required"; 

    }  
    else if (empty($password)) 
    {
      $passwordErr = "Password is required"; 

    }
    else if (empty($confpassword)) 
    {
      $confpasswordErr = "Confirm Password is required"; 

    }

     else if ($confpassword != $password)
    {
      $confpasswordErr = " Confirm Password don't match"; 

    }
    else {
      $query="INSERT INTO customer (name,email,phno,pwd) VALUES ('$name','$email','$phno','$password') "; 

      $res=mysqli_query($conn,$query);
       $regmsg="Successful Registration!!!";

        header("Location:cust_sign.php?regmsg=".$regmsg);
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
				<form action="" method="post" name="regform">
				<!-- <form class="login100-form validate-form"> -->
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
			<!-- <form action="" method="post" name="regform"> -->
				
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
						<span class="error"><?php echo $nameErr;?></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email address...">
						<span class="error"><?php echo $emailErr;?></span>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone Number is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="phno" placeholder="Phone Number...">
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="confpassword" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">

						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<!-- <button class="login100-form-btn" type="submit" value="submit" formmethod="post">
								Sign Up
							</button> -->
							<input type="submit" class="login100-form-btn" name="submit" value="Sign Up" style="background-color: #ea7773"/ >
						</div>
			<!-- 	</form> -->

						<a href="cust_login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
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
	<script src="js/main.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main1.js"></script>


</body>
</html>