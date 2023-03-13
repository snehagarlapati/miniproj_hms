<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
if(isset($_POST['submit']))
{
    $specialization=$_POST['Doctorspecialization'];
    $doctorid=$_POST['doctor'];
    $userid=$_SESSION['id'];
    $fees=$_POST['fees'];
    $appdate=$_POST['appdate'];
    $time=$_POST['apptime'];
    $userstatus=1;
    $docstatus=1;
    $query=mysqli_query($conn,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specialization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
	if($query)
	{
		echo "<script>alert('Your appointment successfully booked');</script>";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient | Book-Appointment</title>
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
        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
        <script>
function getdoctor(val) {
    alert("hi="+val);
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specializationid='+val,
	success: function(data){
        alert("data="+data);
		$("#doctor").html(data);
	},
    error: function(error) {
            alert(error);
       }
	});
    alert("bye");
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	
</head>
<body>
    <div id="app">
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">
            <?php include('include/header.php'); ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                <section id="page-title">
					<div class="row">
						<div class="col-sm-8">
							<h1 class="mainTitle">User | Book Appointment</h1>
						</div>
				</section>


                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
									<h5 class="panel-title">Book Appointment</h5>
								</div>
                                <div class="panel-body">
                                    <form role="form" name="book" method="post">
                                        <div class="form-group">
                                            <label for="DoctorSpecialization">
                                                Doctor Specialization
                                            </label>
                                            <select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                                                <option value="">Select Specialization</option>
                                                <?php
                                                    $ret=mysqli_query($conn,"select * from doctorspecialization");
                                                    while($row=mysqli_fetch_array($ret))
                                                    {
                                                ?>
                                                <option value="<?php echo htmlentities($row['specialization']);?>">
                                                    <?php echo htmlentities($row['specialization']);?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="doctor">
                                                Doctors
                                            </label>
                                            <select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
                                                <option value="">Select Doctor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="consultancyfees">
                                                Consultancy fees
                                            </label>
                                            <select name="fees" class="form-control" id="fees" readonly>
                                              
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="AppointmentDate">
                                            Appointment Date
                                            </label>
                                            <input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">
                                            
                                        </div>


                                        <div class="form-group">
                                            <label for="AppointmentTime">
                                            Appointment time
                                            </label>
                                            <input class="form-control" name="apptime" id="timepicker1" required="required">
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>