<?php 
	
	session_start();
	include('include/db.php');
	if(isset($_GET['del']))
	{
		mysqli_query($con,"delete from medicine where id = '".$_GET['id']."'");
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
							<h1>View Medicine</h1><br><br>
													
				<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
  								<div class="row">
									<div class="col-md-12">
										
										<h5 class="over-title margin-bottom-15"><span class="text-bold">Manage Medicine</span></h5>
											<table class="table table-hover" id="sample-table-1">
												<thead>
													<tr>
														<th class="center">#</th>
														<th>Medicine</th>
														<th class="hidden-xs">Description</th>
														<th>Action</th>
													</tr>							
												</thead>							
												<tbody>
													<?php
														$sql=mysqli_query($con,"select * from medicine");
														$cnt=1;
														while($row=mysqli_fetch_array($sql))
														{
													?>
													<tr>
														<td class="center"><?php echo $cnt;?>.</td>
														<td class="hidden-xs"><?php echo $row['medicine'];?></td>
														<td><?php echo $row['description'];?></td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs">
																<a href="see_med.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
											
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
	
		<br class="clear" />
	  </div>
	</div>
	</div>
	</div>
	</div>
	</main>
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

</body>
</html>