<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	//include('include/chklogin.php');
	if(isset($_POST['submit']))
	{
		$fullName=$_POST['fullName'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$sql=mysqli_query($con,"Update patients set fullName='$fullName',address='$address',city='$city',gender='$gender' where email='$email'");
		if ($sql) 
		{
			echo "<script>alert(' Record updated successfully');</script>";
		} else {
			echo "<script>alert('There was a Error Updating profile');</script>";
		}
							
	}
?>

<?php //Confirm_Login();?>
<!DOCTYPE>
<html lang="en">
    <head>
		<title>ADMIN DASHBOARD</title>
		
		<meta charset="utf-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

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
													<h5 class="panel-title">Patient PROFILE</h5>
												</div>
												<div class="panel-body">
												<?php $sql=mysqli_query($con,"select * from patients where email='".$_SESSION['email']."'");
												while($data=mysqli_fetch_array($sql))
												{?>
												<form role="form" name="edit" method="post">
													<div class="form-group">
															<label for="fname">
																 User Name
															</label>
															<input type="text" name="fullName" class="form-control" value="<?php echo htmlentities($data['fullName']);?>" >
													</div>
													<div class="form-group">
															<label for="address">
																 Address
															</label>
															<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
													</div>
													<div class="form-group">
															<label for="city">
																 City
															</label>
															<input type="text" name="city" class="form-control" required="required"  value="<?php echo htmlentities($data['city']);?>" >
													</div>
													<div class="form-group">
															<label for="gender">
																Gender
															</label>
															<input type="text" name="gender" class="form-control" required="required"  value="<?php echo htmlentities($data['gender']);?>">
													</div>
													<div class="form-group">
															<label for="fess">
																 User Email
															</label>
															<input type="email" name="email" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['email']);?>">
													</div>
												<?php } ?>
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
							<!-- end: BASIC EXAMPLE -->
							<!-- end: SELECT BOXES -->
					</div>
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