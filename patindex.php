<?php
	session_start();
	include('include/db.php');
	
?>
<!doctype html>
<html lang="en">
  <head>
    <title>DOC'S SOLUTION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <?php include 'patheader.php';?>
    

    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url('img/login_slider1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
			
              <h1 style="color:#2E86c1;">Welcome to Hospital Appointment.</h1>
			  <h1 style="color:#2E86c1;">How Can We Help?</h1>
			  
              <p style="color:#2E86c1;">Online doctor appointment, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

	
      <div class="slider-item" style="background-image: url('img/slider-image2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 style="color:#2E86c1;">We Care For You</h1>
              <p style="color:#2E86c1;">Online doctor appointment, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>	
	  
    </section>
    <!-- END slider -->

    
    <section class="container home-feature mb-5">
      <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital-bed"></span>
            <h2>See Your Profile</h2>
            <p>You can check yor profile,check your detail and also update your profile.</p>
		  </div>
		  <a href="patprofile.php" class="btn-more">GO</a>
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-first-aid-kit"></span>
            <h2>Make Appointment</h2>
            <p>You can take appointment as per your requierments from anywhere in gujrat.</p>
		   </div>
		  <a href="appointment.php" class="btn-more">GO</a>
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital"></span>
            <h2>See Your Appointment History</h2>
            <p>You can check your appointment records and also you can cancel your appointment.</p>
		  </div>
		  <a href="apphistory.php" class="btn-more">GO</a>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section stretch-section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Why Choose Us</h2>
            <p class="mb-0 lead">Online doctor appointment, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
        
        <section class="cover_1" style="background-image: url(img/bg_1.jpg);">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-10">
            <h2 class="heading element-animate">Experience Our Advance Facilities</h2>
            <p class="sub-heading element-animate mb-5">Online doctor appointment, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p class="element-animate"><a href="#" class="btn btn-primary btn-lg">Get In Touch</a></p>
          </div>
        </div>
      </div>
    </section>
    </div>
    </section>
    <!-- END section -->

    <!-- END section -->

   

    <!-- END section -->

    <a href="appointment.php" class="cta-link element-animate">
      <span class="sub-heading">Ready to Visit?</span> 
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->
	
    <footer class="site-footer" role="contentinfo" >
		<div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5" >
           
      <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@has.com</a></p>
            <h4 class="text-uppercase mb-3 h6 text-white">Contact Number</h5>
             <p class="fa fa-earphone" aria-hidden="true">+91 9012345678</a></p>
               
            </ul>

          </div>
          <div class="col-md-3 mb-5">
            <h3>More Links</h3>
                <ul class="info"> 
                   
				    <li><a href="patlogin.php">Patient Login</a></li>
                    <li><a href="register.php">Register Here</a></li>
                   
                </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Patient Support</h3>
              
                <ul class="info"> 
                    <li><a href="mail.php">Mail Us</a></li>
                    <li><a href="mail.php">Ask Your Queries</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
          </div>
          <div class="col-md-3 mb-5">
             <h3>ADDRESS</h3>
            
			<h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@has.com</a></p>
            
            
          </div>
        </div>
		<div class="footer-copy-pos">
                <a href="index.php" class="scroll"><img src="img/arrow.png" alt="no " class="img-responsive" /></a>
        </div>
        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p class="mb-3 h6 text-white">Designed By | JAY RATHOD, NISHIT PANCHAL<br>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SHUBHAM PATEL & RUTVIK PATEL | &copy;<?php echo date('Y')?> all right reserved</p>
         
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->


    <!-- Modal -->
   

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>