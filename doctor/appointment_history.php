<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	//include('include/checklogin.php');
	//check_login();
	if(isset($_GET['cancel']))
	{
		        mysqli_query($con,"update appointments set doctorStatus='0' where id = '".$_GET['id']."'");
				$_SESSION['msg']="Appointment canceled !!";
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Appointment History</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
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
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<script src="js/jquery.min.3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script><style>
		<script src="asset/js/scripts.js"></script>
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
	<body style="background-color:#ADADC9">

	<div id="app">		
		<?php include('include/sidebar.php');?>
		<div class="app-content">
			<?php include('include/header.php');?>

			<div class="main-content" >
				<div class="container-fluid">
					<div class="row">
				
					</div><br><br><br>


					<div class="col-sm-offset-1 col-md-10">
					<br><h1>APPOINTMENTS</h1><br><br>
					<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">						
						<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center" style="font-size:15px;">#</th>
												<th class="hidden-xs" style="font-size:15px;">Patient  Name</th>
												
												<th style="font-size:15px;">Consultancy Fee</th>
												<th style="font-size:15px;">Appointment Date / Time </th>
												<th style="font-size:15px;">Appointment Creation Date  </th>
												<th style="font-size:15px;">Current Status</th>
												<th style="font-size:15px;">Action</th>
												
											</tr>
										</thead>
										<tbody>
										<?php
										
											$sql=mysqli_query($con,"select patients.fullName as fname,appointments.*  from appointments join patients on 
											patients.id=appointments.patientsid where appointments.d_id='".$_SESSION['d_id']."'");
											$cnt=1;
											while($row=mysqli_fetch_array($sql))
											{
										?>

											<tr>
												<td class="center" style="font-size:15px;"><?php echo $cnt;?>.</td>
												<td class="hidden-xs" style="font-size:15px;"><?php echo $row['fname'];?></td>
												
												<td style="font-size:15px;"><?php echo $row['consultancyFees'];?></td>
												<td style="font-size:15px;"><?php echo $row['appointmentDate'];?> 
													<?php echo $row['appointmentTime'];?>
												</td>
												<td style="font-size:15px;"><?php echo $row['postingDate'];?></td>
												<td style="font-size:15px;">
												<?php if(($row['patientsStatus']==1) && ($row['doctorStatus']==1))  
												{
													echo "<P><font color=green>Active</font></P>";
												}
												if(($row['patientsStatus']==0) && ($row['doctorStatus']==1))  
												{
													echo "<P><font color=red>Cancel by Patient</font></P>";
												}
												if(($row['patientsStatus']==1) && ($row['doctorStatus']==0))  
												{
													echo "<P><font color=red>Cancel by You</font></P>";
												}
												?></td>
												<td style="font-size:15px;">
												<div class="visible-md visible-lg hidden-sm hidden-xs">
												<?php if(($row['patientsStatus']==1) && ($row['doctorStatus']==1))  
												{ ?>
											<a href="appointment_history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
											<?php } else {
													echo "Canceled";
													} ?>
												</div>
												</td>
											</tr>
											
											<?php 
												$cnt=$cnt+1;
											 }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
				</div>
			</div>
		</div>
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
		<script src="assets/js/login.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
				FormElements.init();
			});
		</script><!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
