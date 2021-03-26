<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	if(isset($_POST['submit']))
	{
		
		$docspecialization=$_POST['Doctorspecialization'];
		$docname=$_POST['docName'];
		$docaddress=$_POST['address'];
		$city=$_POST['city'];
		$docfees=$_POST['docFees'];
		$doccontactno=$_POST['contactno'];
		$docemail=$_POST['docemail'];
		$password=$_POST['password'];
		
		
		$query=mysqli_query($con,"insert into doctor(specialist,docName,city,address,docFees,contactno,docemail,password) 
		values('$docspecialization','$docname','$city','$docaddress','$docfees','$doccontactno','$docemail','$password')");
		if($query)
		{
			//echo "<script>alert('Your appointment successfully booked');</script>";
			$_SESSION['msg']="Doctor added successfully !!";
		}
	}
	
?>
<?php
	//include('include/checklogin.php');
	//check_login();
?>

<!DOCTYPE>
<html>
    <head>
		<title>ADMIN DASHBOARD</title>
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

		<script type="text/javascript">
		function valid()
		{
			 if(document.adddoc.password.value!= document.adddoc.cfpass.value)
			{
				alert("Password and Confirm Password Field do not match  !!");
				document.adddoc.cfpass.focus();
				return false;
			}
				return true;
		}
		</script>
		
	</head>
	<body style="background-color:#ADADC9">
		
	<div id="app">		
		<?php include('include/sidebar.php');?>
		<div class="app-content">
			<?php include('include/header.php');?>

			<div class="main-content" >
				<div class="container-fluid">
					<div class="row">
				
					</div><br><br><br><!--ending of side area-->
				<div class="col-sm-offset-1 col-md-10">
					<h1>ADD DOCTOR</h1>
					<main>
						<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
					
						<div class="row">
						
							<div class="col-sm-offset-2 col-md-12">
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white" style="border-color:#9897A9;">
											<div class="panel-heading">
											<div class="panel-title" >
												Add Doctor
											</div>
											</div>
											<div class="panel-body">
												<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
												<?php echo htmlentities($_SESSION['msg']="");?></p>
												<form role="form" name="adddoc" method="post" onSubmit="return valid();">
													<div class="form-group">
													
														<label for="DoctorSpecialization">
															Doctor Specialization
														</label>
													
													<select name="Doctorspecialization" class="form-control" required="required">
													<div style="font-size:17px;" style="color:#000000;">
														<option value="">
															Select Specialization
														</option>
														</div>
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
														<label for="doctorname">
															Doctor Name
														</label>
														
														<input type="text" name="docName" class="form-control" style="font-size:17px;" placeholder="Enter Doctor Name">
													</div>
													
													<div class="form-group">
													
														<label for="DoctorSpecialization" >
															City
														</label>
													
														<input type="text" name="city" class="form-control" style="font-size:17px;" placeholder="Enter City Name">
													</div>
													<div class="form-group">
													
														<label for="address" >
															Doctor Clinic Address
														</label>
													
														<textarea name="address" class="form-control" style="font-size:17px;" placeholder="Enter Doctor Clinic Address"></textarea>
													</div>
													<div class="form-group">
													
														<label for="fess" >
															Doctor Consultancy Fees
														</label>
													
														<input type="text" name="docFees" class="form-control" style="font-size:17px;" placeholder="Enter Doctor Consultancy Fees">
													</div>
													<div class="form-group">
													
														<label for="fees" >
															Doctor Contact no
														</label>
													
														<input type="text" name="contactno" class="form-control" style="font-size:17px;" placeholder="Enter Doctor Contact no">
													</div>
													<div class="form-group">
													
														<label for="fess" >
															Doctor Email
														</label>
													
														<input type="email" name="docemail" class="form-control" style="font-size:17px;" placeholder="Enter Doctor Email id">
													</div>
													<div class="form-group">
													
														<label for="exampleInputPassword1" >
															Password
														</label>
													
														<input type="password" name="password" class="form-control" style="font-size:17px;" placeholder="New Password" required="required">
													</div>
													<div class="form-group">
													
														<label for="exampleInputPassword2" >
															Confirm Password
														</label>
													
														<input type="password" name="cfpass" class="form-control" style="font-size:17px;"  placeholder="Confirm Password" required="required">
													</div>
													<button type="submit" name="submit" class="btn btn-o btn-primary" style="font-size:20px;">
														Submit
													</button>
												</form>	
											</div>	
										</div>
                                    </div>
								</div>
							</div>
							</div>
							</div><br><br>

				</div>
			</div>
					</div>
		</div>
	</main><!--ending of main area-->
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
		
		<script src="assets/js/login.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
				Login.init();
			});
		</script><!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>