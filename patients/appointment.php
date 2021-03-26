<?php
	include('include/db.php');
	session_start();
	
	if(isset($_POST['submit']))
	{
		$specilization=$_POST['docSpecialization'];
		$doctorid=$_POST['doctor'];
		$userid=$_SESSION['id'];
		$fees=$_POST['fees'];
		$appdate=$_POST['appdate'];
		$time=$_POST['apptime'];
		$userstatus=1;
		$docstatus=1;
		$query=mysqli_query($con,"insert into appointments(docSpecialization,d_id,patientsid,consultancyFees,appointmentDate,appointmentTime,patientsStatus,doctorStatus) 
		values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
		if($query)
		{
			echo "<script>alert('Your appointment successfully booked');</script>";
		}
	}

?>
<!DOCTYPE>
<html lang="en">
    <head>
		<title>Doctor  | Dashboard</title>
		
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
		<link rel="stylesheet" href="css/header.css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
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
				$("#fees").html(data);
				}
			});
		}
		</script>	

		<style>
			body
			{
				position:relative;
				min-height:150vh;
			}
			#footer
			{
				padding:20px;
				border-top: 1px solid black;
				color:#000000;
				background-color:#0000A0;
				text-align:center;
				position:absolute;
				bottom:0;
				width:100%;
			}
		</style>
	</head>
	<body>
		<div id="app">		
		<?php include('include/sidebar.php');?>
		<div class="app-content">
			<?php include('include/header.php');?>

			<div class="main-content" >
				<div class="container-fluid">
					<div class="row">
				
					</div><br><br><br><!--ending of side area-->
					<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">PATIENT DASHBOARD</h1>
								</div>
					</section>
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
												<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
												<?php echo htmlentities($_SESSION['msg1']="");?></p>	
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
														<select name="fees" class="form-control" id="fees"  readonly>
														
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
					
					
						
						
					
						<!-- end: SELECT BOXES -->
				</div>
			</div>
		</div>
		</div>
</div>	
		<!--ending of main area-->
		<div id="footer">
			<hr>
			<a style="color:white; text-decoration:none; cursor:pointer; font-weight:bold;">
				<p>Designed By | RUTU & ZEEL | &copy;<?php echo date('Y')?> all right reserved</p>
			</a>
		</div>
		
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