<?php
	session_start();
	//error_reporting(0);
	include('include/db.php');
	//include('include/function.php');
	if(isset($_POST['submit']))
	{
		$Specialization=$_POST['specialist'];
		$query=mysqli_query($con,"insert into doc_specialization(specialist)
		values('$Specialization')");
		if($query)
		{
			//echo "<script>alert('Your appointment successfully booked');</script>";
			$_SESSION['msg']="Doctor Specialization added successfully !!";
		}
	}
	if(isset($_GET['del']))
	{
		mysqli_query($con,"delete from doc_specialization where id = '".$_GET['id']."'");
        $_SESSION['msg']="data deleted !!";
	}

?>

<!DOCTYPE>
<html>
    <head>
		<title>ADD DOCTOR SPECIALIZATION</title>
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
					<h1>Add Doctor Specialization</h1><br><br>
					
				
												<main>
						
							<div class="row">
						<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
	
								<div class="col-md-12">
									<div class="row margin-top-30">
									
										<div class="col-lg-6 col-md-12">
											<div class="panel panel-white" style="border-color:#9897A9;">
												<div class="panel-heading">
													<h4 class="panel-title">Doctor Specialization</h4>
												</div>
												<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
													<?php echo htmlentities($_SESSION['msg']="");?></p>	
													<form role="form" name="dcotorspcl" method="post" >
														<div class="form-group">
															<label for="exampleInputEmail1">
																Doctor Specialization
															</label>
															<input type="text" name="specialist" class="form-control"  placeholder="Enter Doctor Specialization">
														</div>
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Add
														</button>
													</form>
												</div>
											</div>
										</div>
											
									</div>
								</div>
								</div>
							</div><br><br><br>
							<div class="row">
							<div class="container-fluid container-fullw bg-white" style="border-radius:10px;">
								<div class="col-md-12">
									<h4 class="over-title margin-bottom-15"><span class="text-bold">Manage Docter Specialization</span></h4>
									<table class="table table-hover" id="sample-table-1" >
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Specialist</th>
												<th class="hidden-xs">Creation Date</th>
												<th>Updation Date</th>
												<th>Action</th>
												</tr>
										</thead>
							<tbody>
								<?php
									$sql=mysqli_query($con,"select * from doc_specialization");
									$cnt=1;
									while($row=mysqli_fetch_array($sql))
									{
								?>
								<tr>
									<td class="center"><?php echo $cnt;?>.</td>
									<td class="hidden-xs"><?php echo $row['specialist'];?></td>
									<td><?php echo $row['creationdate'];?></td>
									<td><?php echo $row['updationdate'];?></td>
									<td >
										<div class="visible-md visible-lg hidden-sm hidden-xs">
											<a href="edit_doctorspec.php?id=<?php echo $row['id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
											<a href="doctorspec.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
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
			<!-- end: BASIC EXAMPLE -->
			<!-- end: SELECT BOXES -->
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
				Login.init();
				FormElements.init();
			});
		</script>
	</body>
</html>