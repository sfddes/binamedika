<?php
    include_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="csslog.css">
    </head>
    <head>
        <title>Sign Up</title>
        <style>
        label {
            display : block
        }
        </style>
    </head>
    <body>
        <div class="logo">
            <h1 class="heading-style-left-padding"><img src="gambar/logo.png" alt="logo"></h1>
                <div class="container">
                    <center>
                    <p class="tulisan_login">SIGN UP</p>
                        <form action = "koneksi.php?proses_registrasi" method ="post" id="login" class="input">
                            <center>
                                <label for ="username">Username :</label>
                                <input type ="text" name="username" id = "Username">
                                <label for ="email"> Email :</label>
                                <input type = "email" name="email" id="Email">
                                <label for ="password"> Password :</label>
                                <input type = "password" name="password" id="Password">
                                <label for ="password2"> Confirm Password :</label>
                                <input type = "password" name="konfirmasi_pass" id="Password2">
                                <label for ="inputState"> Role</label>
                                <select id ="inputState" name = "role" class = " form-control">
                                    <option selected>Pilih Role</option>
                                    <option> Admin </option>
                                </select>
                                <br/>
                                <br/>
                                <button type="submit" value="signup" href="login.php">Sign Up</button>
                            </center>
                    </center>
                    <br/>

                        </form>
                        <br/>
                        <div class="bottom">
                            <a href="login.php">Have an account? Go to login</a>
                        </div>
                </div>
        </div>
        </div>
    </body>
</html>