<?php
	session_start();
	include('include/db.php');
	
	$patid=intval($_GET['id']);
	if(isset($_POST['submit']))
	{
		$medicine=$_POST['medicine'];
		$day=$_POST['day'];
		$dos=$_POST['dose'];
		$details=$_POST['details'];
		$d_id=$_SESSION['d_id'];
		
		$query=mysqli_query($con,"insert into prescription(d_id,patid,medicine,day,dose,details) 
		values('$d_id','$patid','$medicine','$day','$dos','$details')");
		if($query)
		{
			//echo "<script>alert('Your appointment successfully booked');</script>";
			$_SESSION['msg']="Prescription added successfully !!";
		}
		
		
	}
	if(isset($_GET['del']))
	{
		          mysqli_query($con,"delete from prescription where preid = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
	}
	
?>
<!DOCTYPE>
<html lang="en">
    <head>
		<title>Doctor  | Dashboard</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
		<link rel="stylesheet" href="css/header.css">
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
		<script src="js/bootstrap.min.js"></script>
		<script src="asset/js/scripts.js"></script>
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
	<body style="background-color:#ADADC9">
		<div id="app">		
		<?php include('include/sidebar.php');?>
			<div class="app-content">
			<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="container-fluid">
						<div class="row">
						
						</div><br><br><br>
		<!--ending of side area-->
						<div class="col-sm-offset-1 col-md-10">
							<h1> Prescription</h1>
						<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
							<main>
								<div class="row">
									<div class="col-sm-offset-2 col-md-10">
										<div class="row margin-top-10">
											<div class="col-lg-6 col-md-12">
												<div class="panel panel-white" style="border-color:#9897A9;">
													<div class="panel-heading">
														<h5 class="panel-title">Medicine</h5>
													</div>
													<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
													<?php echo htmlentities($_SESSION['msg']="");?></p>
													<?php 
														
														$patid=intval($_GET['id']);
														$sql=mysqli_query($con,"select * from appointments where id=$patid");
														while($data=mysqli_fetch_array($sql))
														{
														?>
														
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														
														<div class="form-group">
															<label for="patname">
																Patient Id
															</label>
															<input type="text" name="patName" class="form-control" autocomplete="off" value="<?=$data['patientsid']?>">
														</div>
														<div class="form-group">
															<label for="DoctorSpecialization">
																Medicine
															</label>
															<select name="medicine" class="form-control" required="required">
																<option value="<?php echo htmlentities($data['medicine']);?>">
																	<?php echo htmlentities($data['medicine']);?></option>
																	<?php $ret=mysqli_query($con,"select * from medicine");
																	while($row=mysqli_fetch_array($ret))
																	{
																	?>
																	<option value="<?php echo htmlentities($row['medicine']);?>">
																	<?php echo htmlentities($row['medicine']);?>
																	</option>
																	<?php } ?>
															</select>
														</div>
														<div class="form-group">
															<label for="patname">
																Day
															</label>
															<input type="text" name="day" class="form-control" autocomplete="off">
														</div>
														<div class="form-group">
															<label for="patname">
																Dos
															</label>
															<select name="dose" class="form-control" required="required">
																	<option value="">Select</option>
																	<option value="0-0-1">0-0-1</option>
																	<option value="0-1-0">0-1-0</option>
																	<option value="0-1-1">0-1-1</option>
																	<option value="1-0-0">1-0-0</option>
																	<option value="1-0-1">1-0-1</option>
																	<option value="1-1-0">1-1-0</option>
																	<option value="1-1-1">1-1-1</option>
															</select>
														</div>
														<div class="form-group">
														<label for="address">
															Prescription
														</label>
														<textarea name="details" class="form-control"  placeholder="Enter Prescription"></textarea>
														</div>
														<?php }?>
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
								
							</div><br>
						
							</div>
							</div>	
							</div>
                           </div>
						</div>
					</div>
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
		</script>
	</body>
</html>