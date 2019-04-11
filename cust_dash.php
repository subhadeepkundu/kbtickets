<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["email"])) {
    header("location: cust_login.php");
    exit; 
}
else {$email= $_SESSION["email"];
$cust_id=$_SESSION["cust_id"];}
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


<?php
$AC1=array("Jadavpur","Jadavpur P.S.","South City/Lake Gardens","Prince Anwar Shah Road","Rashbehari Avenue","Hazra Park","Elgin Road","Rabindra Sadan/Exide","Park Street","Esplanade","B.B.D. Bag","Howrah Bridge East","Howrah Station");
$AC9B=array("Jadavpur","Sukanta Setu","Santoshpur","Survey Park/Kalikapur","Kasba Depot/Ruby Hospital","Panchanna Gram/VIP Nagar Bazar","Science City/Park Circus Connector","Metropolitan Co-Op Housing Estates","Chingrihata","Sukanta Nagar","Nicco Park","Swastha Bhavan","College Mor","Technopolis","New Town Bus Stand","HIDCO Bhavan/Narkel Bagan","Tata Medical Centre","Ecospace");
$KP2=array("Barrackpore Chiria More","Talpukur(Barrackpore)/BMRC","Sandhya Cinema","Sukhchar","Sodepur More/Panihati Pourasabha","Agarpara","Rathtala","Indian Statistical Institute","Rabindra Bharati University","BT Road Bus Stand","Jagat Mukherjee Park","Girish Park","Manicktala","HUDCO","Apollo Hospital","Chingrighata","Dhapa/Mathpukur/Marriot","Panchannagram","Ruby Hospital","Metro Cash & Carry","Peerless More/Hiland Park","Patuli Jheel Par","Pepsi/Das Para","Mahamayatala");
$all=array("Jadavpur","Jadavpur P.S.","South City/Lake Gardens","Prince Anwar Shah Road","Rashbehari Avenue","Hazra Park","Elgin Road","Rabindra Sadan/Exide","Park Street","Esplanade","B.B.D. Bag","Howrah Bridge East","Howrah Station","Jadavpur","Sukanta Setu","Santoshpur","Survey Park/Kalikapur","Kasba Depot/Ruby Hospital","Panchanna Gram/VIP Nagar Bazar","Science City/Park Circus Connector","Metropolitan Co-Op Housing Estates","Chingrihata","Sukanta Nagar","Nicco Park","Swastha Bhavan","College Mor","Technopolis","New Town Bus Stand","HIDCO Bhavan/Narkel Bagan","Tata Medical Centre","Ecospace","Barrackpore Chiria More","Talpukur(Barrackpore)/BMRC","Sandhya Cinema","Sukhchar","Sodepur More/Panihati Pourasabha","Agarpara","Rathtala","Indian Statistical Institute","Rabindra Bharati University","BT Road Bus Stand","Jagat Mukherjee Park","Girish Park","Manicktala","HUDCO","Apollo Hospital","Chingrighata","Dhapa/Mathpukur/Marriot","Panchannagram","Ruby Hospital","Metro Cash & Carry","Peerless More/Hiland Park","Patuli Jheel Par","Pepsi/Das Para","Mahamayatala");
?>


	<form action="cust_dash.php" method="post" name="book">
			<span class="login100-form-title p-b-59">Book Your Tickets</span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="mdb-select md-form" searchable="Search here.." name="start">
		  	<option value="" disabled selected>Enter start stop</option>
		  	<?php 
		  	foreach($all as $item1){
        	?>
	        <option value="<?php echo ($item1); ?>"><?php echo $item1; ?></option>
	        <?php
	        }
	        ?>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="mdb-select md-form" searchable="Search here.." name="stop">
		  	<option value="" disabled selected>Enter end stop</option>
		  	<!-- <option value="1">AC1</option>
		  	<option value="2">AC9B</option>
		  	<option value="3">KP2</option> -->
		  	<?php 
		  	foreach($all as $item2){
        	?>
	        <option value="<?php echo ($item2); ?>"><?php echo $item2; ?></option>
	        <?php
	        }
	        ?>
		</select><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="mdb-select md-form" searchable="Search here.." name="qty">
		  	<option value="" disabled selected>Enter Quantity</option>
		  	<?php 
			for($i=1; $i<=10; $i++)
			{
			    echo "<option value=".$i.">".$i."</option>";
			}
			?> 
			 <option name="qty"> </option> 
		</select>
		&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="login100-form-btn" name="submit" value="See Details" style="background-color: #ea7773"/><br><br>
	</form>


<!-- <?php
if(isset($_POST['submit'])){

echo $_POST["start"]."<br>";
echo $_POST["stop"]; 
echo $_POST["qty"];
}?> -->

<?php
if(isset($_POST['submit'])){
$start=$_POST["start"];
$stop=$_POST["stop"];
$qty=$_POST["qty"];
$routeSelected="";
$filename="";
  if (in_array($start, $AC1)&&in_array($stop, $AC1))
  {
  $routeSelected="AC1";
  $filename="AC1.csv";
  }
  elseif (in_array($start, $AC9B)&&in_array($stop, $AC9B))
  {
  $routeSelected="AC9B";
  $filename="AC9B.csv";
  }
  elseif (in_array($start, $KP2)&&in_array($stop, $KP2))
  {
  $routeSelected="KP2";
  $filename="KP2.csv";
  }
  else
  {
  	$routeSelected="N/A";
  }
 // echo $routeSelected;
if(strcmp($routeSelected,"N/A")==0){
	/*echo "No Routes Found ";*/
	$tot=0;
}
else{
//$filname=routeSelected+".csv";
$delimiter=',';
/*function csv_to_multidimension_array($filename='', $delimiter=',')
{*/
    if(!file_exists($filename) || !is_readable($filename)) {
        return false;
    }
    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false ) {
            $data[] = $row;
        }
        fclose($handle);
    }
     //for($)
    $r=0;
    $c=0;
    echo "<br>";
    for($i=1;$i<count($data);$i++){
    	//echo $data[$i][0]."-".$i." ";
    	if(strcmp($start,$data[$i][0])==0)
    		$r=$i;
    }
    for($i=0;$i<count($data);$i++){
    	if(strcmp($stop,$data[0][$i])==0)
    		$c=$i;
    }

    	//echo "Fare is : ".$data[$r][$c];
    	$fare=$data[$r][$c];
    	$tot=$data[$r][$c]*$qty;
    	//echo "Total Fare is : ".$tot;
     //echo $data[0][8]." ".$data[1][5];
//}
    }?>

    <h3> For your selected start point <b> <?php echo $start?></b> and end point <b> <?php echo $stop?></b> route is <b> <?php echo $routeSelected?></b> </h3><br>
    	<h3>Your Total Payable amount is INR <b> <?php echo $tot."/-"?></b></h3><br>
    	<form action="" method="post" name="pay">
    		<input type="hidden" id="start" name="start" value="<?php echo $start ?>">
    		 <input type="hidden" id="stop" name="stop" value="<?php echo $stop ?>">
    		 <input type="hidden" id="routeSelected" name="routeSelected" value="<?php echo $routeSelected ?>">
    		 <input type="hidden" id="fare" name="fare" value="<?php echo $fare ?>">
    		 <input type="hidden" id="qty" name="qty" value="<?php echo $qty ?>">
    		 <input type="hidden" id="tot" name="tot" value="<?php echo $tot ?>">

    	<input type="submit" class="login100-form-btn" name="submit1" value="PAY NOW" style="background-color: #170a66"/><br><br>
    	</form>
<?php }?>

<?php
 if(isset($_POST['submit1'])){
 	$message = "Your Payement Was Successful!!!";
	echo "<script type='text/javascript'>alert('$message');</script>";
 	$start= $_POST['start'];
 	$stop= $_POST['stop'];
 	$routeSelected= $_POST['routeSelected'];
 	$fare= $_POST['fare'];
 	$qty= $_POST['qty'];
 	$tot= $_POST['tot'];
 	/*$name= $_POST['name'];
 	$name= $_POST['name'];*/

$query="INSERT INTO transactions (cust_id,start,stop,route,fare,qty,amt) VALUES ('$cust_id','$start','$stop','$routeSelected','$fare','$qty','$tot') ";

      $res=mysqli_query($conn,$query);
  }
?>





	<span class="login100-form-title p-b-59">Your Past Transactions</span>


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