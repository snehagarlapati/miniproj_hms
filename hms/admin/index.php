<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
    $uname=$_POST['username'];
    $pwd=$_POST['password'];
    $ret=mysqli_query($conn,"SELECT * FROM admin WHERE username='$uname' and password='$pwd'");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
    $_SESSION['login']=$_POST['username'];
    $_SESSION['id']=$num['id'];
    header("location:dashboard.php");

    }
    else
    {
        echo "<script> alert('Invalid username and password');</script>";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body class="login" style="background-color:cornsilk;">
    <div class="logo margin-top-30">
        <h2 style="color: crimson;">Admin Login</h2>
    </div>
    <div class="box-login">
        <form class="form-login" method="post">
            <fieldset>
                <legend>
                    Sign in to your account
                </legend>
                <p>
                    Please enter your name and password to log in.
                    <br>
                    <br>
                </p>
                <div class="form-group">
                    <span class="input-icon">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </span>
                </div>
                <br>
                <div class="form-group form-actions">
                    <span class="input-icon">
                        <input type="password" class="form-control password" name="password" placeholder="Password">
                         </span>
                </div>
                <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary pull-right" name="submit">
                        Login 
                    </button>
                </div>
                <br>
                <a href="../../index.php" target="_blank">Back to Home Page</a>
                
            </fieldset>
        </form>
    </div>
</body>
</html>