<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	//include('include/function.php');
	//check_login();
	date_default_timezone_set('Asia/Kolkata');// change according timezone
	$currentTime = date( 'd-m-Y h:i:s A', time () );
	if(isset($_POST['submit']))
	{
		$sql= "SELECT * FROM doctor WHERE docName= '" . $_SESSION["docName"]."' AND password= '" . $_POST["password"]."'";
		$query=mysqli_query($db,$sql);
		$num=mysqli_num_rows($query);
		if($num>0)
		{
			if($newpassword==$confpassword){
			$sql1="UPDATE doctor SET password='" . $_POST["newpassword"]  ."' WHERE docName='" .$_SESSION["docName"] ."'";
			mysqli_query($db,$sql1);
			mysqli_close($db);
			echo "<script>alert('Password Has been Updated');</script>";
			}else{
				echo "<script>alert('Password did not match');</script>";

			}
		}else{
			echo "<script>alert('Input Correct Password');</script>";
		}
}
?>
<!DOCTYPE>
<html lang="en">
    <head>
		<title>Doctor  | change Password</title>
		<meta charset="utf-8" />
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
		<script src="js/jquery.min.3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function valid()
			{
			if(document.chngpwd.confpassword.value=="")
			{
			alert("Current Password Filed is Empty !!");
			document.chngpwd.confpassword.focus();
			return false;
			}
			else if(document.chngpwd.newpassword.value=="")
			{
			alert("New Password Filed is Empty !!");
			document.chngpwd.newpassword.focus();
			return false;
			}
			else if(document.chngpwd.confpassword.value=="")
			{
			alert("Confirm Password Filed is Empty !!");
			document.chngpwd.confpassword.focus();
			return false;
			}
			else if(document.chngpwd.newpassword.value!= document.chngpwd.confpassword.value)
			{
			alert("Password and Confirm Password Field do not match  !!");
			document.chngpwd.confpassword.focus();
			return false;
			}
			return true;
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
				<h4>HAS</h4>
				<ul id="Side_Menu" class="nav nav-pills nav-stacked">
					<li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Dashboard</a></li>
					<li><a href="docprofile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Doctor Profile</a>
					<li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;Change Password</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Appointment Records</a></li>
					<!--<li><a href="admins.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admin</a></li>-->
					<!--<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;LogOut</a></li>-->
				</ul>
				</div><!--ending of side area-->
				
				<div class="col-sm-8">
					<h1>DOCTOR DASHBOARD</h1>
					<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Change Password</h5>
												</div>
												<div class="panel-body">
												<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
												<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
												</div>
														
														<div class="form-group">
															<label for="exampleInputEmail1">
																Current Password
															</label>
														<input type="password" name="password" class="form-control"  placeholder="Enter Current Password">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																New Password
															</label>
														<input type="password" name="newpassword" class="form-control"  placeholder="New Password">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																Confirm Password
															</label>
														<input type="password" name="confpassword" class="form-control"  placeholder="Confirm Password">
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
						<!-- end: BASIC EXAMPLE -->
							
						<!-- end: SELECT BOXES -->
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