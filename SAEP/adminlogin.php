<?php

if (!isset($_SESSION)){
    session_start();
}


$host = 'localhost';
$username = "root";
$password = "";
$database = "event_planner";

$con = new mysqli($host, $username, $password, $database);

if($con->connect_error){
    echo $con->connect_error;
}


if(isset($_POST['login'])){

    $id = $_POST['username'];
    $pw = $_POST['password'];


    $insert = "SELECT * FROM tblregister WHERE Username = '$id' AND Password = '$pw'";
    $user = $con->query($insert) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if($total > 0){
    $_SESSION['USERLOGIN'] = $row['Username'];
    $_SESSION['ACCESS'] = $row['Password'];
    echo header("Location: calendar.html");
    }else{
        echo '<script>alert("No User Found!")</script>';
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
      <title>Admin</title>
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
				   <a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="about.html">About</a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="contactus.html">Contact Us</a>
				</li>
				<li class="nav-item">
				   <a class="nav-link" href="calendar2.html">Events</a>
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
				   <a class="nav-link" href="adminlogin.php">Admin</a>
				</li>
			 </ul>
		  </div>
		</div>
		</div>
	</div>

<div class="container">
	<div class="screen">
		<div class="screen__content">
            <link rel="stylesheet" href="adminlogin.css" />
			<link rel="stylesheet" href="style.css" />
			<form class="login" method="POST">
				<div class="login__field">
					
					<input type="text" name="username" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					
					<input type="password" name="password" class="login__input" placeholder="Password">
				</div>
				<button name="login" id="login" class="button login__submit">
					Log In
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<button  class="button login__submit">
					<a href="signup.php">Register</a>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>		
				
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