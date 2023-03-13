<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) 
{
 header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    
  }
 

}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage Patients</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
            <?php 
            include('include/sidebar.php');
            ?>
            <div class="app-content">
                <?php include('include/header.php');?>
                <div class="main-content" >
                    <div class="wrap-content container" id="container">
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Doctor | Manage Patients</h1>
                            </div>
                        </div>
                    </section>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="mainTitle">Manage Patients</h5>
                            <?php
                               $vid=$_GET['viewid'];
                              
                               $ret=mysqli_query($conn,"select * from tblpatient where id='$vid'");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                            ?>
                        <table class="table table-bordered">
                            <tr>
                            <td colspan="4" style="font-size:20px;color:blue">
                                Patient Details</td>
                            </tr>
                            <tr>
                                <th>Patient Name</th>
                                <td><?php  echo $row['PatientName'];?></td>
                                <th>Patient Email</th>
                                <td><?php  echo $row['PatientEmail'];?></td>
                            </tr>
                            <tr>
                                <th scope>Patient Mobile Number</th>
                                <td><?php  echo $row['PatientContno'];?></td>
                                <th>Patient Address</th>
                                <td><?php  echo $row['PatientAdd'];?></td>
                            </tr>
                            <tr>
                                <th>Patient Gender</th>
                                <td><?php  echo $row['PatientGender'];?></td>
                                <th>Patient Age</th>
                                <td><?php  echo $row['PatientAge'];?></td>
                            </tr>
                            <tr>
    
                            <th>Patient Medical History(if any)</th>
                                <td><?php  echo $row['PatientMedhis'];?></td>
                                <th>Patient Reg Date</th>
                                <td><?php  echo $row['CreationDate'];?></td>
                            </tr>
 
                        <?php }?>
                    </table>
                <?php  
                $ret=mysqli_query($conn,"select * from tblmedicalhistory  where PatientID='$vid'");
                ?>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                 <tr>
                    <th colspan="8" >Medical History</th> 
                    </tr>
                <tr>
                    <th>#</th>
                    <th>Blood Pressure</th>
                    <th>Weight</th>
                    <th>Blood Sugar</th>
                    <th>Body Temprature</th>
                    <th>Medical Prescription</th>
                    <th>Visit Date</th>
                </tr>
                <?php  
               
                    while ($row=mysqli_fetch_array($ret)) { 
                        $cnt=1;
                ?>
                <tr>
                    <td><?php echo $cnt;?></td>
                    <td><?php  echo $row['BloodPressure'];?></td>
                    <td><?php  echo $row['Weight'];?></td>
                    <td><?php  echo $row['BloodSugar'];?></td> 
                    <td><?php  echo $row['Temperature'];?></td>
                    <td><?php  echo $row['MedicalPres'];?></td>
                    <td><?php  echo $row['CreationDate'];?></td> 
                </tr>
            <?php $cnt=$cnt+1;} ?>
            </table>              
        </div>
        </div>
</div>
</div>
</div>

=
		
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>

