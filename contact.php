<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$description=$_POST['description'];
$query=mysqli_query($conn,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$description')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="css/style_ind.css" rel="stylesheet" type="text/css"  media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
 <!--start-wrap-->

			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.php" style="font-size: 30px;">Hospital Management system</a>
				</div>
				
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>

						<li class="active"><a href="contact.php">contact</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">
				<div class="col span_1_of_3">

      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>   <br>
						    	<p>Banjara hills,</p>
						   		<p>22-56-2-9 , Hyderabad,</p>
						   		<p>India</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>cshospitals@gmail.com</span></p>

				   </div>
				   <br>
				   <br>
				</div>
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					<br>
					    <form method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" value="" name="fullname"></span>
						    </div>
							<br>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" value="" name="emailid"></span>
						    </div>
							<br>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" value="" name="mobileno"></span>
						    </div>
							<br>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea rows="5" name="description"> </textarea></span>
						    </div>
							<br>
						   <div>
						   		<span><input type="submit" value="Submit" name="submit"></span>
						  </div>
						  <br>
					    </form>
				    </div>
  				</div>
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<br>
	<br>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li style="float: left;font-family:'Times New Roman', Times, serif;background-color: cornflowerblue;color: brown;padding: 20px;;"><a href="index.php">HOME</a></li>

						<li style="float:right;font-family:'Times New Roman', Times, serif;background-color: cornflowerblue;color: brown;padding: 20px;"><a href="contact.php">CONTACT</a></li>
					</ul>
		   	</div>

		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>
   
</body>
</html>