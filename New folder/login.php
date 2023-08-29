<?php
include_once 'koneksi.php';
if (isset($_SESSION['username'])) {
  if($_SESSION['role'] == "Admin") {
    header("location : admin.php");
  } elseif($_SESSION['role'] == "Customer") {
    header("location : admin.php");
  }
} 
?>


<!-- <!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="stylesheet" type="text/css" href="csslog.css">
    </head>
<head>
  <title>LOGIN</title>
  <style>
    label {
       display : block
    }
  </style>
</head>
<body>
  <div class="logo">
    <h1 class="heading-style-left-padding"><font color="black">RentalVehicle</font></h1>
    <div class="container">
      <center>
      <h1> LOGIN </h1>
      <form action = "koneksi.php?proses_login" method ="post" id="login" class="input">
        <center>
          <label for ="username">Username :</label>
          <input type ="text" name="username" id = "Username">
          <label for ="password"> Password :</label>
          <input type = "password" name="password" id="Password">
        </center>
        <br><button style="font-size:larger; background-color:#6407fa4d; border-color:black;"type ="Submit" name ="Submit">login</button><br>
        <h4><br><a href="Signup.php" >Belum memiliki akun?Daftar</a></h4>
      </center>
      </form>
    </div>
      <div class="fullscreen-bg">
        <video loop muted autoplay poster="htdocs/to.mp4" class="fullscreen-bg__video">
            <source src="v2.mp4" type="video/mp4" style="top">
        </video>
      </div>
  </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="csslog.css">
</head>
<body>
    <div class="logo">
        <h1 class="heading-style-left-padding"><img src="gambar/logo.png" alt="logo"></h1>
	        <div class="container">

	        	<p class="tulisan_login">LOGIN</p>

	        	<form action = "koneksi.php?proses_login" method ="post" id="login" class="input">
	        		<label>Username</label>
	        		<input type="text" name="username" class="form_login" placeholder="Username">

	        		<label>Password</label>
	        		<input type="password" name="password" class="form_login" placeholder="Password">
                    <button type="submit" value="LOGIN" href="index.html">Login</button>
	        	
	        		<br/>
	        		<br/>
                    
	        		<center>
	        	
	        		</center>
	        	</form>
                <br/>
                <div class="bottom">
                    <a href="signup.php">Register</a>
                    <!-- <a href="#">Forgot Password</a> -->
                </div>
            </div>
    </div>
 
</body>
</html>