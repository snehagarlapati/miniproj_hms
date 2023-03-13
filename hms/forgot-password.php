<?php
session_start();
error_reporting(0);
include('include/config.php');
if(isset($_POST['submit']))
{
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $query=mysqli_query($con,"select id from  users where fullName='$name' and email='$email'");
    $row=mysqli_num_rows($query);
    if($row>0)
    {
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        header('location:reset-password.php');
    }
     else 
     {
        echo "<script>alert('Invalid details. Please try with valid details');</script>";
        echo "<script>window.location.href ='forgot-password.php'</script>";
     }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot Password</title>
    <link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
</head>
<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
			    <a href="../index.php"><h2> HMS | Patient Password Recovery</h2></a>
		    </div>
            <div class="box-login">
                <form class="form-login" method="post">
                    <legend>
						Patient Password Recovery
					</legend>
					<p>
						Please enter your Email and password to recover your password.<br />
                    </p>
                    <div class="form-group form-actions">
						<span class="input-icon">
							<input type="text" class="form-control" name="fullname" placeholder="Registred Full Name">
							<i class="fa fa-lock"></i>
						 </span>
                    </div>

					<div class="form-group">
						<span class="input-icon">
							<input type="email" class="form-control" name="email" placeholder="Registred Email">
							<i class="fa fa-user"></i> </span>
					</div>

					<div class="form-actions">
								
						<button type="submit" class="btn btn-primary pull-right" name="submit">
							Reset <i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					<div class="new-account">
						Already have an account? 
					    <a href="user.php">
						    Log-in
                        </a>
					</div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>