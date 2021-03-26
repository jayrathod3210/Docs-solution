<?php if(!isset($_SESSION)){
	session_start();
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
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<script src="js/jquery.min.3.3.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
					<li><a href="patprofile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Patient Profile</a>
					<li><a href="#"><span class="glyphicon glyphicon-edit"></span>&nbsp;Change Password</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Appointments</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Make Appointments</a></li>
					<!--<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;LogOut</a></li>-->
				</ul>
				</div><!--ending of side area-->
				<div class="col-sm-8">
					<h1>PATIENT DASHBOARD</h1>
					<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<!--<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<form action="search_result.php" role="form" name="adddoc" method="post" onSubmit="return valid();">-->
												<?php 
													$_POST["city"]="";
													$_POST["specialist"]="";
													include('include/db.php');
													$sql = " SELECT * FROM doctor WHERE city = '" . $_POST["city"]."' 
													AND specialist = '" . $_POST["specialist"]."' ";
													$result=mysql_query($sql);
													//$count = mysql_num_rows($result);
														echo "<table border='1' align='center' cellpadding='32'>
																<tr>
																		<th>SL.</th>
																		<th>Name</th>
																		<th>City</th>
																		<th>Address</th>
																		
																		<th>Mobile</th>
																		
																		<th>Email</th>
																		<th>Specialist- in</th>
																		<th>Fee</th>
																		<th>Book</th>
																</tr>";
																while($row=mysql_fetch_array($result)){
																		echo "<tr>";
																		echo "<td>".$row['d_id']."</td>";
																		echo "<td>".$row['docName']."</td>";
																		echo "<td>".$row['city']."</td>";
																		echo "<td>".$row['address']."</td>";
																		
																		echo "<td>".$row['contactno']."</td>";
																		echo "<td>".$row['docemail']."</td>";

																		echo "<td>".$row['specialist']."</td>";
																		echo "<td>".$row['docFees']."</td>";
?>
<td><a href="booking.php?docName=<?php echo $row['docName'] ?>">Book</a></td>;
<?php
	echo "</tr>";
						}
						echo "</table>";
												
?>

											<!--</form>-->												
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