<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	$id=intval($_GET['id']);// get value
	date_default_timezone_set('Asia/Kolkata');// change according timezone
	$currentTime = date( 'd-m-Y h:i:s A', time () );
	if(isset($_POST['submit']))
	{
		$sql=mysqli_query($con,"update  doc_specialization set specialist='".$_POST['doc_specialization']."', updationdate='$currentTime'where id='$id'");
		$_SESSION['msg']="Doctor Specialization updated successfully !!";
	}
?>
<?php
	//include('include/checklogin.php');
	//check_login();
?>


<!DOCTYPE>
<html lang="en">
    <head>
		<title>ADMIN DASHBOARD</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
					<h1> EDIT DOCTOR SPECIALIZATION</h1><br><br>
					
				
					<main>
					
					<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
							<div class="row">
								<div class="col-sm-offset-3 col-md-12">
									<div class="row margin-top-30">
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white" style="border-color:#9897A9;">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Doctor Specialization</h5>
												</div>
												<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
													<?php echo htmlentities($_SESSION['msg']="");?></p>	
													<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
																Edit Doctor Specialization
															</label>
															<?php
																$id=intval($_GET['id']);
																$sql=mysqli_query($con,"select * from doc_specialization where id='$id'");
																while($row=mysqli_fetch_array($sql))
																{
															?>		
															<input type="text" name="doc_specialization" class="form-control" value="<?php echo $row['specialist'];?>" >
															<?php } ?>
														</div>
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
				
									</div>
								</div>
													<br><br><br><br>
							<a href="doctorspec.php"><i class="glyphicon glyphicon-chevron-left" style="color:#ffffff"></i></a>
				
							</div>
					</div>
				</main>
				</div>
			</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
					</div>
					</div>
					</div>
					<div class="clearfix"></div>
			<!--ending of main area-->
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		
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