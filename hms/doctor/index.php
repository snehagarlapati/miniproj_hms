<?php
session_start();
include("include/config.php");
error_reporting(0);
// if($_SERVER('REQUEST_METHOD'=="POST")){
    if(isset($_POST["Login"]))
    {
    // echo "if".$_POST['username']." = ".$_POST['password'];
    $uname=$_POST['username'];
	$pass=md5($_POST['password']);
    //    echo "var";
     $login = mysqli_query($conn,"SELECT * FROM doctors WHERE docEmail='".$uname."' and password='".$_POST['password']."'");
      //echo  $uname."=".$pass;
      $rows = mysqli_fetch_array($login);
      //echo $rows;
      if($rows>0)
      {
         // echo "Success";
          $_SESSION['login']=$_POST['username'];
          $_SESSION['id']=$rows['id'];

          //echo "id=".$_SESSION['id'];
          //echo "rows=".$rows['id'];
        
          $uid=$rows['id'];

          $uip=$_SERVER['REMOTE_ADDR'];
          $status=1;
          
          mysqli_query($conn,"insert into doctorslog(uid,username,userip,status) values('$uid','$uname','$uip','$status')");
  
          header("Location:dashboard.php");
      }
      
      else
      {
  
          $uip=$_SERVER['REMOTE_ADDR'];
          $status=0;
          mysqli_query($conn,"insert into doctorslog(username,userip,status) values('$uname','$uip','$status')");
          echo "<script>alert('Invalid username and password');</script>";
          header("location:index.php");
  
      }
   
    }
// }


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
    
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body class="login">
    <div>
        <div>
            <div>
                <h2> Doctor Login</h2>
            </div>

            <div>
                <form class="form-login" method="POST">
                    <fieldset>
                        <legend>
                            Sign in to your account
                        </legend>
                        <p>
                            Please enter your name and password to log in.<br />
                            
                        </p>
                        <div class="form-group">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </span>
                        </div>
                        <br>
                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="password" class="form-control password" name="password" placeholder="Password" required>
                            </span>
                        </div>
                        <br>
                    
                        <div class="form-actions">
                            
                            <input type="submit" name="Login"> 
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