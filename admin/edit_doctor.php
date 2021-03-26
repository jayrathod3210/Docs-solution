<?php
	session_start();
	include('include/db.php');
	$did=intval($_GET['d_id']);// get doctor id
	if(isset($_POST['submit']))
	{
		$docspecialization=$_POST['Doctorspecialization'];
		$docname=$_POST['docName'];
		$docaddress=$_POST['address'];
		$docfees=$_POST['docFees'];
		$doccontactno=$_POST['contactno'];
		$docemail=$_POST['docemail'];
		$sql=mysqli_query($con,"Update doctor set specialist='$docspecialization',docName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno',docemail='$docemail' where d_id='$did'");
		$_SESSION['msg']="Doctor details updated successfully !!";
	}
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
					<h1> EDIT DOCTOR</h1><br><br>
					
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Add Doctor</h5>
											</div>
											<div class="panel-body">
											<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
													<?php echo htmlentities($_SESSION['msg']="");?></p>	
											<?php 
											$did=intval($_GET['d_id']);
											$sql=mysqli_query($con,"select * from doctor where d_id='$did'");
											while($data=mysqli_fetch_array($sql))
											{
											?>
											<form role="form" name="adddoc" method="post" onSubmit="return valid();">
											<div class="form-group">
												<label for="DoctorSpecialization">
													Doctor Specialization
												</label>
											<select name="Doctorspecialization" class="form-control" required="required">
												<option value="<?php echo htmlentities($data['specialist']);?>">
												<?php echo htmlentities($data['specialist']);?></option>
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
												<input type="text" name="docName" class="form-control" value="<?php echo htmlentities($data['docName']);?>" >
											</div>
											<div class="form-group">
												<label for="address">
													Doctor Clinic Address
												</label>
												<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
											</div>
											<div class="form-group">
												<label for="fess">
													Doctor Consultancy Fees
												</label>
												<input type="text" name="docFees" class="form-control" required="required"  value="<?php echo htmlentities($data['docFees']);?>" >
											</div>
											<div class="form-group">
											<label for="fess">
												Doctor Contact no
											</label>
											<input type="text" name="contactno" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
											</div>
                                            <div class="form-group">
												<label for="fess">
													Doctor Email
												</label>
												<input type="email" name="docemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['docemail']);?>">
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
							<div class="col-lg-12 col-md-12">
									<div class="panel panel-white"></div>
							</div>
						</div>
				</div>
				</div>
			</div>
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
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
		
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
		
				FormElements.init();
			});
		</script><!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>