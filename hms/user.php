<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE email='$uname' and password='$pass'";
    $res=mysqli_query($conn,$sql);
    $n=mysqli_fetch_array($res);
    if($n>0)
    {
        $_SESSION['login']=$_POST['username'];
        $_SESSION['id']=$n['id'];
        $pid=$n['id'];
        $host=$_SERVER['HTTP_HOST'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=1;
        
        $log=mysqli_query($conn,"insert into userlog(uid,username,userip,status) values('$pid','$uname','$uip','$status')");
        header("location:dashboard.php");
    }
    else
    {
    
        $_SESSION['login']=$_POST['username'];	
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=0;
        mysqli_query($conn,"insert into userlog(username,userip,status) values('$puname','$uip','$status')");
       
        echo "<script>alert('Invalid username or password' );</script>";
        header("location:user.php");
    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />	
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body class="login">
    <div>
        <div>
            <div>
                <h2> Patient Login</h2>
            </div>

            <div>
                <form class="form-login" method="post">
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your name and password to log in.<br />
                            
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                                </span>
                        </div>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password" placeholder="Password">
                                 </span>
                        </div>
                        <br>
                    
                        <div class="form-actions">
                            
                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Login <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        <div class="new-account">
                            Don't have an account yet?
                            <a href="registration.php">
                                Create an account
                            </a>
                        </div>
                    </fieldset>
                </form>
                <br>
                <br>
               
        
            </div>

        </div>
    </div>
</body>
</html>