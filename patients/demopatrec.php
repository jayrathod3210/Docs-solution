<?php 
	//session_start();
	$menu= 2;
	include("include/db.php");
	//include("header.php");
	include("validation/header.php"); 
	include("functions/dpatient.php");

//CHECKS login button is submitted or not

?>

<!-- ####################################################################################################### -->
<?php 
	//include("menu.php"); 
	mysqli_query($con,"DELETE FROM patients WHERE email = '$_GET[id]'");
	if(isset($_POST["patidbtn"]))
	{
		$resapp = mysqli_query($con,"SELECT * FROM patients where fullName='$_POST[textfield]'");
		$_POST[textfield2] ="";
	}
	else
	{
		$resapp = mysqli_query($con,"SELECT * FROM patients");
	}
?>


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
										<div class="col-sm-4">
											<div class="panel panel-white no-radius text-center">
												<div class="panel-body">
													<div id="container">
													  <div class="wrapper">
														<div id="content">
															<form method="post" action="" id="formID">
																<div class="form-group">
																	<label for="fess">
																		Search By Name:
																	</label>
																	<input type="text" name="textfield" id="textfield" class="validate[custom[onlyNumberSp]] text-input" value="<?php echo $_POST[textfield]; ?>"/> 
																		<button type="submit" name="patidbtn"  id="button" class="btn btn-o btn-primary" value="">
																			Search
																		</button>
																</div>	
															</form>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Reports</span></h5>
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Patient Name</th>
												<th>Gender</th>
												<th>Email ID</th>
												<th>Contact No</th>
												<th>Address</th>
												<th>city</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$sql=mysqli_query($con,"select * from patients");
												$cnt=1;
												while($row=mysqli_fetch_array($sql))
												{
											?>
											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td><?php echo $row['fullName'];?></td>
												<td><?php echo $row['gender'];?></td>
												<td><?php echo $row['email'];?></td>
												<td><?php echo $row['contactno'];?></td>
												<td><?php echo $row['address'];?></td>
												<td><?php echo $row['city'];?></td>
												<td>
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="edit_doctor.php?id=<?php// echo $row['d_id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
														<a href="demopresc.php?id=<?php echo $row['email']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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
				</div>
				</div>
			</div>
		</div>
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