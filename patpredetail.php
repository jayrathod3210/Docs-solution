<?php
	session_start();
	include('include/db.php');
		
	//print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Prescription Detail</title>
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
	<body style="background-color:#95B9C7">
		<?php include 'patheader.php';?><br><br><br>
		<div class="container-fluid container-fullw bg-white">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-9 col-sm-9  user-wrapper">
						<div class="description">
							
							<hr/>
							<div class="panel panel-default">
								<div class="panel-body">
									<table class="table table-user-information" align="center">
										<tbody>
												<thead>
											<tr>
												<th class="center">#</th>
												<th>Patient Id</th>
												<td>Medicine Name</td>
												<td>Days</td>
												<td>Dose</td>
												<td>Prescription</td>
												
											</tr>
										</thead>
										<?php 
										$res=mysqli_query($con,"SELECT * FROM prescription WHERE patid='".$_SESSION['id']."'");
										$cnt=1;
										while($row=mysqli_fetch_array($res))
										{
										?>
											<tr>
												<td>Medicine You Need</td>
												<td><?php echo $row['medicine']; ?></td>
											</tr>
											<tr>
												<td>Days You Need To Eat Medicine</td>
												<td><?php echo $row['day']; ?></td>
											</tr>
											<tr>
												<td>Doses Of Medicine</td>
												<td><?php echo $row['dose']; ?></td>
											</tr>
											<tr>
												<td>Prescription</td>
												<td><?php echo $row['details']; ?></td>
												
											</tr>
											
										<?php
											$cnt=$cnt+1;
											}
										?>
										
										</tbody>
									</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div><br><br><br><br><br><br><br>
			<?php include 'footer.php';?>
	</body>
</html>