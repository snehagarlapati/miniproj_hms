<?php
session_start();
error_reporting(0);
include('include/config.php');
if(isset($_POST['change']))
{
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$newpassword=md5($_POST['password']);
$query=mysqli_query($con,"update users set password='$newpassword' where fullName='$name' and email='$email'");
if ($query) {
echo "<script>alert('Password successfully updated.');</script>";
echo "<script>window.location.href ='user-login.php'</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USer| Reset Password </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <script type="text/javascript">
        function valid()
        {
            if(document.passwordreset.password.value!= document.passwordreset.password_again.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.passwordreset.password_again.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
				<a href="../index.php"><h2> HMS | Patient Reset Password</h2></a>
				</div>
        </div>
        <div class="box-login">
            <form class="form-login" name="passwordreset" method="post" onSubmit="return valid();">
                <fieldset>
                    <legend>
                        Patient Reset password
                    </legend>
                    <p>
						Please set your new password.<br />
						<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
					</p>

                    <div class="form-group">
                        <span class="input-icon">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            <i class="fa fa-lock"></i> </span>
                    </div>
	

                    <div class="form-group">
                        <span class="input-icon">
                        <input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
                        <i class="fa fa-lock"></i> 
                        </span>
                    </div>

                    <div class="form-actions">
								
						<button type="submit" class="btn btn-primary pull-right" name="change">
							Change <i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					<div class="new-account">
						Already have an account? 
						<a href="user.php">
							Log-in
						</a>
					</div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>