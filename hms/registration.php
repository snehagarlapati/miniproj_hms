<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($conn,"insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered.');</script>";
	
}
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script type="text/javascript">
		function valid()
		{
			if(document.registration.password.value!=document.registration.password_again.value)
			{
				alert("Invalid Password");
				return false;
			}
			else
			{
				return true;
			}
		}
	</script>


</head>
<body class="login" style="background-color: aliceblue;">

    <div>
        <h2 style="color:brown;">Patient Registration</h2>
    </div>
    <div class="box-register">
        <form name="registration" id="registration" method="post" onsubmit="return valid()">
           <fieldset>
				<legend>
					Sign Up
				</legend>
				<p>
				Enter your details below:
				</p>
	    		<div class="form-group">
				    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
				</div>
                <br>
                <div class="form-group">
					<input type="text" class="form-control" name="address" placeholder="Address" required>
				</div>
                <br>
				<div class="form-group">
					<input type="text" class="form-control" name="city" placeholder="City" required>
				</div>
                <br>
				<div class="form-group">
					<label class="block">
					Gender
				    </label>
				<div class="clip-radio radio-primary">
				<input type="radio" id="rg-female" name="gender" value="female" >
				<label for="rg-female">
					Female
				</label>
				<input type="radio" id="rg-male" name="gender" value="male">
					<label for="rg-male">
						Male
			    	</label>
				</div>
            </div>
			<br>
            <br>
			<div class="form-group">
			<span class="input-icon">
			<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
			</span>
				 <span id="user-availability-status1" style="font-size:12px;">
			</span>
			</div>
            <br>
			<div class="form-group">
				<span class="input-icon">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						<i class="fa fa-lock"></i> </span>
			</div>
            <br>
			<div class="form-group">
				<span class="input-icon">
					<input type="password" class="form-control" name="password_again" placeholder="Password Again" required>
						<i class="fa fa-lock"></i> </span>
			</div>
			
			</div>
		    <div class="form-actions">
				<p>
					Already have an account?
					<a href="user.php">
						Log-in
					</a>
				</p>
			<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
					Submit <i class="fa fa-arrow-circle-right"></i>
					</button>
			</div>
        </fieldset>
        </form>
    </div>
</body>
</html>