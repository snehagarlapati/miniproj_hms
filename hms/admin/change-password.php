<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id'])==0)
{
    header('location: logout.php');
}
else
{
    if(isset($_POST['submit']))
    {
        $cpass=$_POST['cpass'];
        $uname=$_SESSION['login'];
        $sql=mysqli_query($conn,"SELECT password FROM  admin where password='$cpass' && username='$uname'");
        $num=mysqli_fetch_array($sql);
        if($num>0)
        {
            $npass=$_POST['npass'];
            $conn=mysqli_query($conn,"update admin set password='$npass', updationDate='$currentTime' where username='$uname'");
            $_SESSION['msg1']="Password Changed Successfully !!";
        }
        else
        {
            $_SESSION['msg1']="Old Password not match !!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin| ChangePassword</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


    <script type="text/javascript">
        function valid()
        {
            if(document.chngpwd.cpass.value=="")
            {
                alert("Current Password Filed is Empty !!");
                document.chngpwd.cpass.focus();
                return false;
            }
            else if(document.chngpwd.npass.value=="")
            {
                alert("New Password Filed is Empty !!");
                document.chngpwd.npass.focus();
                return false;
            }
            else if(document.chngpwd.cfpass.value=="")
            {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.cfpass.focus();
                return false;   
            }
            else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
            {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.cfpass.focus();
            return false;
            }       
            return true;
        }
    </script>
</head>
<body>
<div id="app">	
    <?php include('include/sidebar.php');
    ?>	
	<div class="app-content">			
		<?php include('include/header.php');?>
		<div class="main-content" >
			<div class="wrap-content container" id="container">
	
				<section id="page-title">
					<div class="row">
					<div class="col-sm-8">
						<h1 class="mainTitle">Admin | Change Password</h1>
	        		</div>
					</div>
				</section>
					
				<div class="container-fluid container-fullw bg-white">
					<div class="row">
						<div class="col-md-12">
								
						<div class="row margin-top-30">
							<div class="col-lg-8 col-md-12">
								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">Change Password</h5>
									</div>
								<div class="panel-body">
			        				<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
								<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
									<div class="form-group">
										<label for="exampleInputEmail1">
											Current Password
										</label>
					            		<input type="password" name="cpass" class="form-control"  placeholder="Enter Current Password">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">
											New Password
									</label>
					                <input type="password" name="npass" class="form-control"  placeholder="New Password">
									</div>
														
                                    <div class="form-group">
										<label for="exampleInputPassword1">
											Confirm Password
										</label>
									        <input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password">
									</div>							
														
							    	<button type="submit" name="submit" class="btn btn-o btn-primary">
											submit
                                    </button>
						</form>
					</div>
			        </div>
				</div>
				
                 </div>
	            </div>
				</div>
</body>
</html> 