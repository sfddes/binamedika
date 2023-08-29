<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="csslog1.css">
</head>
<body>
    <div class="logo">
        <h1 class="heading-style-left-padding">BINA MEDIKA</h1>
	        <div class="container">

	        	<p class="tulisan_login">LOGIN</p>

	        	<form action = "proses-login-petugas.php" method ="post" id="login" class="input">
	        		<label>Username</label>
	        		<input type="text" name="username" class="form_login" placeholder="Username">
	        		<label>Password</label>
	        		<input type="password" name="password" class="form_login" placeholder="Password">
                <button type="submit" value="LOGIN" >Login</button>
	        		<br/>
	        		<br/>   
	        		<center>
	        		</center>
	        	</form>
                <br/>
                <!-- <div class="bottom">
                    <a href="signup.php">Register</a>
                    <a href="#">Forgot Password</a>
                </div> -->
            </div>
    </div>
 
</body>
</html>