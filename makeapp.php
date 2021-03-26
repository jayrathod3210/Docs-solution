<?php
	include('include/db.php');
	session_start();
	if(isset($_POST['submit']))
	{
		$specilization=$_POST['docSpecialization'];
		
		$doctorid=$_POST['doctor'];
		$patientsid=$_SESSION['id'];
		$fees=$_POST['fees'];
		$appdate=$_POST['appdate'];
		$time=$_POST['apptime'];
		$userstatus=1;
		$docstatus=1;
		
		$query=mysqli_query($con,"insert into appointments(docSpecialization,d_id,patientsid,consultancyFees,appointmentDate,appointmentTime,patientsStatus,doctorStatus) 
		values('$specilization','$doctorid','$patientsid','$fees','$appdate','$time','$userstatus','$docstatus')");
		if($query)
		{
			echo "<script>alert('Your appointment successfully booked');</script>";
		}
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Web Medico</title>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0,shrink-to-fit=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		  
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/adminstyles.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">
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
		<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script>
			function getdoctor(val) {
				$.ajax({
					type: "POST",
					url: "get_doctor.php",
					data:'specializationid='+val,
					success: function(data){
					$("#doctor").html(data);
					}
				});
			}
		</script>
		<script>
			function getfee(val) {
				$.ajax({
				type: "POST",
				url: "get_doctor.php",
				data:'doctor='+val,
				success: function(data){
					//alert(data);
					$("#fees").html(data);
					}
				});
			}
		</script>	
	</head>
  <body style="background-color:#95B9C7">
	<?php include 'header.php'; ?>
	<br>
	<div class="container-fluid container-fullw ">
							<div class="row">
								<div class="col-sm-offset-4 col-md-10">
									
									<div class="row margin-top-30">
										<div class="col-lg-5 col-md-10">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
												<p style="color:red;"><?php if(isset($_SESSION['msg1'])) echo htmlentities($_SESSION['msg1']); ?>
												</p>
												<form role="form" name="book" method="post" >
													<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
															<select name="docSpecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
																<option value="">Select Specialization</option>
																<?php $ret=mysqli_query($con,"select * from doc_specialization");
																while($row=mysqli_fetch_array($ret))
																{
																?>
																<option value="<?php echo htmlentities($row['specialist']);?>">
																	<?php echo htmlentities($row['specialist']);?>
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
															Consultancy Fees
														</label>
														<select name="fees" class="form-control" id="fees" >
														
														</select>
													</div>
													
													<div class="form-group">
														<label for="AppointmentDate">
															Date
														</label>
														<input class="form-control" name="appdate"  type="date" required="required">
													</div>
													<div class="form-group">
														<label for="Appointmenttime">
															Time
														</label>
														<input class="form-control timepicker" name="apptime" type="time" required="required">
													</div>	<br>
													<button type="submit" name="submit" class="btn btn-o btn-primary">
														Submit
													</button>
													<br>
													<br>
												</form>
												</div>
											</div>
										</div>
										
									</div>
									
					<br><br><br><br>
							<a href="patindex.php"><i class="glyphicon glyphicon-chevron-left"></i></a>
								</div>
							</div>
							
					</div>
					
						
						
					
						<!-- end: SELECT BOXES -->
				</div>
			</div>
		</div>
		</div>
</div>	
		<!--ending of main area-->
		<?php include 'footer.php'; ?><!-- END footer -->

		
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
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