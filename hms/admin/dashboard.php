<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin|Dashboard</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body>
  <div id="app">
    <?php include('include/sidebar.php');?>
    <div class="app-content">
     <?php include('include/header.php')?>
      <div class='main-content'>
        <div class="wrap-content container" id="container">
        <section id="page-title">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="mainTitle">Admin | Dashboard</h1>
						</div>
						
						</ol>
						</div>
						</section>
            <div class="container-fluid container-fullw bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div  class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> 
					  </span>
							<h2 class="StepTitle">Manage Users</h2>
                    
                  <p class="links cl-effect-1">
						<a href="manage-users.php" target="_blank">
							<?php 
                          		$result = mysqli_query($conn,"SELECT * FROM users ");
                          		$num_rows = mysqli_num_rows($result);
                         		 {
                          	?>
							 Total Users :<?php echo htmlentities($num_rows);  } ?>		
						</a>
					</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
				<div class="panel panel-white no-radius text-center">
								<div class="panel-body">
									<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
	  								<h2 class="StepTitle">Manage Doctors</h2>
										
										<p class="cl-effect-1">
											<a href="manage-doctors.php" target="_blank">
												<?php 
                          							$result1 = mysqli_query($conn,"SELECT * FROM doctors ");
                          							$num_rows1 = mysqli_num_rows($result1);
                        							{
                        						?>
											  Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
											</a>
												
										</p>
										</div>
									</div>
								</div>
                          
                <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Appointments</h2>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="appointment-history.php">
												<?php $sql= mysqli_query($conn,"SELECT * FROM appointment");
                        						$num_rows2 = mysqli_num_rows($sql);
                        						{
                        						?>
											Total Appointments :<?php echo htmlentities($num_rows2);  } ?>	
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Patients</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-patient.php">
                        <?php $result = mysqli_query($conn,"SELECT * FROM tblpatient ");
                                $num_rows = mysqli_num_rows($result);
                          {
                        ?>
                        Total Patients :
                        <?php echo htmlentities($num_rows);  
                        } ?>		
                        </a>
											</p>
										</div>
									</div>
								</div>
								
								


        </div>

      </div>
    </div>
  </div>
</body>
</html>