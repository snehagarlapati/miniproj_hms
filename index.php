<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link href="css/style_ind.css" rel="stylesheet" type="text/css"  media="all" />
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <style type="text/css">
    #slider{
        overflow: hidden;
    }
    #slider figure{
        position: relative;
        width: 500%;
        margin: 0;
        left: 0;
        animation: 20s slider infinite;
    }
    #slider figure img{
        width: 10%;
        float: left;
    } 
    @keyframes slider{
        0%{
            left:0;
        }
        20%{
            left: 0;
        }
        25% {
            left: -100;
        }
        45% {
            left: -100%;
        }
        50%{
            left: -200%;
        }
        70%{
            left: -200%;
        }
        75%
        {
            left: -300%;
        }
        95%
        {
            left: -300%;
        }
        100%{
            left: -400%;
        }
    }

    </style>
</head>
<body>
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="index.php" style="font-size: 70px;">CS HOSPITALS</a>
            </div>

            <div class="top-nav">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="contact.php">contact</a></li>
                    
        
                </ul>					
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div>
        <div class="clear"> </div>
    </div>
    
    <div class="clear"> </div>
    <br>
    <br>
    <div class="content-grids">
        <div class="wrap">
            <div class="section group">

                <div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button"><span><a href="hms/user.php">Click Here</a></span></div>
				    </div>
				</div>	
                

                <div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>
						
						  <div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
					</div>
				</div>

                <div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>
						
						  <div class="button"><span><a href="hms/admin/">Click Here</a></span></div>
				     </div>
            </div>

        </div>
    </div>
    <hr>
    <div id="slider">
        <figure>
            <img src="images/slider0.jpeg">
            <img src="images/slider1.jpeg">
            <img src="images/slider2.jpeg">
            <img src="images/slider4.jpeg">
            <img src="images/slider-image1.jpg">
            <img src="images/slider-image2.jpg">
           
            <img src="images/slider0.jpeg">
        </figure>

    </div>
    <br>
    <br>
    <div class="clear"> </div>
	   <div class="footer">
	   	 <div class="wrap">
		   	<div class="footer-left">
	   			<ul class="foot-ul">
	    			<li style="float: left;">email: cshospitals@gmail.com</li>

					<li style="float: right;">ph-no: +91 7673956092 </li>
				</ul>
		   	</div>   
		   	<div class="clear"> </div>
	   </div>
	</div>
    <hr>
    <hr>
   

</body>
</html>