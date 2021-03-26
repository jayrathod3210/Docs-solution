<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	
?>
<?php 
	
	
	$con = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($con,'php_has');
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
		$sql= "select * from patients where email='$email' and password='$password'";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
		$xy=mysqli_fetch_array($query);
			if($row == 1){
				echo "login successfully";
				$_SESSION['email']=$email;
				$_SESSION['id']=$xy[0];
				header('location:patindex.php');
			}else{
				$_SESSION['errmsg']="";
				$_SESSION['errmsg']="Invalid username or password";
				header('location:patlogin.php');
				return false;
			}
		
	}
?>


<!DOCTYPE>
<html>
    <head>
		<title>ADMIN  MANAGE ADMINS</title>
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
	<body>
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		
				<div class="logo margin-top-30">
				<h2>Patient Login</h2>
				</div>

				<div class="box-login">
					<form class="form-login" method="post">
					<p>
						<center>  <img src="images/demo/patient-man-in-pain-thumb14255893.jpg" alt="" width="178" height="208" /></center>
					</p>
					
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php if(isset($_SESSION['errmsg'])) echo htmlentities($_SESSION['errmsg']); ?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" placeholder="Username" autocomplete="off">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password"><i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="register.php">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>
					

					<div class="copyright">
						<span>	Designed By | RUTU & ZEEL | &copy;<?php echo date('Y')?></span>
					</div>
			
				</div>

			</div>
		</div>
								
			<!-- end: BASIC EXAMPLE -->
			<!-- end: SELECT BOXES -->
		</div>
		</div><!--ending of main area-->

 
 
		
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
	</body>
</html>