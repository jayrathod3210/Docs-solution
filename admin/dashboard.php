<?php
	include('include/function.php');
	include('include/db.php');
	//include('include/chklogin.php');
	//check_login();

?>
<!DOCTYPE>
<html lang="en">
    <head>
		<title>ADMIN DASHBOARD</title>
		
		<meta charset="utf-8"/>
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
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
		<link rel="stylesheet" href="assets/chartist/css/chartist-custom.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/linearicons/style.css">
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
	<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<!--ending of side area-->
				
				<!--<div class="col-sm-11">-->
					<br><h1>ADMIN DASHBOARD</h1><br><br>
					<!-- start: BASIC EXAMPLE -->
						

							<div class="row">
							<div class="col-md-6 col-lg-3">
									<div class="panel panel-white text-center" style="border-radius:10px;">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-wheelchair fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Patients</h2>
											<p class="links cl-effect-1">
												<a href="manage _patients.php">
												<?php $result = mysqli_query($con,"SELECT * FROM patients ");
												$num_rows = mysqli_num_rows($result);
												{?>
												Total Patients :<?php echo htmlentities($num_rows);  } ?>												</a>											</p>
										</div>
									</div>
							</div>
								
							<div class="col-md-6 col-lg-3">
									<div class="panel panel-white  text-center" style="border-radius:10px;">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-md fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Doctors</h2>
											<p class="cl-effect-1">
												<a href="manage_doctor.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctor ");
												$num_rows1 = mysqli_num_rows($result1);
												{?>
												Total Doctors :<?php echo htmlentities($num_rows1);  } ?>												</a>											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="panel panel-white text-center" style="border-radius:10px;">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="glyphicon glyphicon-list-alt fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Appointments</h2>
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="appointment_history.php">
														<?php $sql= mysqli_query($con,"SELECT * FROM appointments");
														$num_rows2 = mysqli_num_rows($sql);
														{
														?>
														Total Appointments :<?php echo htmlentities($num_rows2);  } ?>													</a>
												</a>											</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="panel panel-white text-center" style="border-radius:10px;">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-medkit fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Medicine</h2>
											<p class="links cl-effect-1">
												<a href="see_med.php">
													
														<?php $sql= mysqli_query($con,"SELECT * FROM medicine");
														$num_rows2 = mysqli_num_rows($sql);
														{
														?>
														Total Medicine :<?php echo htmlentities($num_rows2);  } ?>													</a>
																							</p>
										</div>
									</div>
								</div>
							</div>
							
						<br>
						<!-- end: SELECT BOXES -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Weekly Overview</h3>
									<p class="panel-subtitle">Period: Oct 16, 2020 - Oct 21, 2021</p>
								</div>	
							</div>		
								<div class="col-md-9">
									<div id="headline-chart" class="ct-chart"></div>
								</div>
								<div class="col-md-3">
									<div class="weekly-summary text-right">
										<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
										<span class="info-label">Total Appointment</span>									</div>
									<div class="weekly-summary text-right">
										<span class="number">5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
										<span class="info-label">Monthly Appointment</span>									</div>
									<div class="weekly-summary text-right">
										<span class="number">65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
										<span class="info-label">Total Appointment</span>									</div>
								</div>
							</div>
						</div><br>	
						
					<div class="row">
						
						<div class="col-md-4">
							<div class="container-fluid container-fullw bg-white">

						<!-- VISIT CHART -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Website Visits</h3>
								</div>
								<div class="panel-body">
									<div id="visits-chart" class="ct-chart"></div>
								</div>
							</div>
							</div>
						</div>
						
					<!-- END VISIT CHART -->
					
						
						<div class="col-md-8">
							
						<!-- VISIT CHART -->
							<div class="panel">
								<div class="panel-body">
									<div id="chartContainer3" class="ct-chart" >									</div>
								</div>
							</div>
							</div>
							<!-- END VISIT CHART -->
						</div>
					</div>
						</div>
					</div>
				<!--</div>-->
			</div>
		</div>
	</div>
</div>
</div>
		<!--ending of main area-->
		
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
		<script src="scripts/klorofil-common.js"></script>
		<script src="assets/chartist/js/chartist.min.js"></script>
		<script src="assets/js/main.js"></script>
		
    <script src="js/canvasjs.min.js" type="text/javascript"></script>

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
		<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);




		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			fullWidth: true,
			
			axisX: {
				showGrid: false
			},
		};
		
		new Chartist.Bar('#visits-chart', data, options);

		//
		var chart = new CanvasJS.Chart("chartContainer3", {
                title: {
                    text: "Site Traffic January-2020",
                    fontSize: 30
                },
                animationEnabled: true,
							height: 400,

                axisX: {
                    gridColor: "Silver",
                    tickColor: "silver",
                    valueFormatString: "DD/MMM"

                },
                toolTip: {
                    shared: true
                },
                theme: "theme2",
                axisY: {
                    gridColor: "Silver",
                    tickColor: "silver"
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                data: [{
                        type: "line",
                        showInLegend: true,
                        lineThickness: 2,
                        name: "Visits",
                        markerType: "square",
                        color: "#F08080",
                        dataPoints: [
                            {x: new Date(2010, 0, 3), y: 650},
                            {x: new Date(2010, 0, 5), y: 700},
                            {x: new Date(2010, 0, 7), y: 710},
                            {x: new Date(2010, 0, 9), y: 658},
                            {x: new Date(2010, 0, 11), y: 734},
                            {x: new Date(2010, 0, 13), y: 963},
                            {x: new Date(2010, 0, 15), y: 847},
                            {x: new Date(2010, 0, 17), y: 853},
                            {x: new Date(2010, 0, 19), y: 869},
                            {x: new Date(2010, 0, 21), y: 943},
                            {x: new Date(2010, 0, 23), y: 970}
                        ]
                    },
                    {
                        type: "line",
                        showInLegend: true,
                        name: "Unique Visits",
                        color: "#20B2AA",
                        lineThickness: 2,
                        dataPoints: [
                            {x: new Date(2010, 0, 3), y: 510},
                            {x: new Date(2010, 0, 5), y: 560},
                            {x: new Date(2010, 0, 7), y: 540},
                            {x: new Date(2010, 0, 9), y: 558},
                            {x: new Date(2010, 0, 11), y: 544},
                            {x: new Date(2010, 0, 13), y: 693},
                            {x: new Date(2010, 0, 15), y: 657},
                            {x: new Date(2010, 0, 17), y: 663},
                            {x: new Date(2010, 0, 19), y: 639},
                            {x: new Date(2010, 0, 21), y: 673},
                            {x: new Date(2010, 0, 23), y: 660}
                        ]
                    }
                ],
            });

            chart.render();

		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
	</body>
</html>