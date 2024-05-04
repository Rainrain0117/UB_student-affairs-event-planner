<?php

$host = 'localhost';
$username = "root";
$password = "";
$database = "event_planner";

$con = new mysqli($host, $username, $password, $database);

if($con->connect_error){
    echo $con->connect_error;
}


if(isset($_POST['send'])){

    $uname = $_POST['username'];
    $password = $_POST['pw'];
    $confirm = $_POST['cpw'];
    

    if ($_POST['pw'] !== $_POST['cpw']) {
     echo '<script>alert("Password and Confirm Password must match!!")</script>';
     }else{
             $insert = "INSERT INTO `tblregister`(`Username`, `Password`, `Confirm Password`) VALUES
            ('$uname', '$password', '$confirm')";
                echo '<script>alert("Registered!")</script>';
                $con->query($insert) or die ($con->error);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Event Resubmission</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   
<!--header section start -->
<div class="header_section">
	<div class="container-fluid">
	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="logo"><a href="index.html"><img src="images/logo.png" width="50" height="50"></a></div>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			 <ul class="navbar-nav mr-auto">
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				
				
				 <li class="nav-item">
				   <a class="nav-link" href="index.html"></a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="about.html"></a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="contactus.html"></a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="calendar.html"></a>
				</li>
			   &nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
		   &nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				<li class="nav-item">
				   <a class="nav-link" href="adminlogin.php">Admin Login</a>
				</li>
			 </ul>
		  </div>
		</div>
		</div>
	</div>

<div class="container">
	<div class="screen">
		<div class="screen__content">
            <link rel="stylesheet" href="form.css" />
			<link rel="stylesheet" href="signup.css" />
			<form method="POST" class="login">
				<div class="login__field">
					
					<input type="text" name="username" class="login__input" placeholder="Username">
				</div>
				<div class="login__field">
					
					<input type="text" name="pw" class="login__input" placeholder="Password">
				</div>
                <div class="login__field">
					
					<input type="text" name="cpw" class="login__input" placeholder="Confirm Password">
				</div>
                
				<button type="submit" name="send" id="send" class="button login__submit">Register
					
					<i class="button__icon fas fa-chevron-right"></i>
				</button>		
                &nbsp;
                &nbsp;
                &nbsp;
                <a href="adminlogin.php">Have an account?</a>		
			</form>
			<div class="social-login">
				
				
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

<div class="copyright_section">
    <div class="container2">
       <p class="copyright_text">Copyright 2023 All Rights Reserved.<a href="index.html">UBLC SAEP Event Planner</a></p>
    </div>
 </div>