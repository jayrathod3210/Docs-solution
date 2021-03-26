<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Admin Panel Dashboard
    </title>
    <!-- Main CSS-->
		
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
		

  </head>
  <body class="app sidebar-mini rtl">
     <?php include 'aheader.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
           <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <?php $query="SELECT * FROM users"; $rs= query($query); $i= mysqli_num_rows($rs); ?>
                        
              <p><b><?=$i?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info"><i class="icon fa fa-product-hunt fa-3x"></i>
            <div class="info">
              <h4>Products</h4>
               <?php $query="SELECT * FROM product"; $rs= query($query); $i= mysqli_num_rows($rs); ?>
              <p><b><?=$i?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning"><i class="icon fa fa-list-ul fa-3x"></i>
            <div class="info">
              <h4>orders</h4>
               <?php $query="SELECT * FROM orders"; $rs= query($query); $i= mysqli_num_rows($rs); ?>
              <p><b><?=$i?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Review</h4>
               <?php $query="SELECT * FROM review"; $rs= query($query); $i= mysqli_num_rows($rs); ?>
              <p><b><?=$i?></b></p>
            </div>
          </div>
        </div>
      </div>
        
        <div class="charts">
    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
                    {
                        title: {
                            text: "World Wide Sell 2021"
                        },
                        animationEnabled: true,
                        animationDuration: 2000,
                        legend: {
                            verticalAlign: "bottom",
                            horizontalAlign: "center"
                        },
                        data: [
                            {
                                indexLabelFontSize: 20,
                                indexLabelFontFamily: "Monospace",
                                indexLabelFontColor: "darkgrey",
                                indexLabelLineColor: "darkgrey",
                                indexLabelPlacement: "outside",
                                type: "pie",
                                showInLegend: true,
                                toolTipContent: "{y} - <strong>#percent%</strong>",
                                dataPoints: [
                                    {y: 4181563, legendText: "IND 3", indexLabel: "India"},
                                    {y: 2175498, legendText: "CH", indexLabel: "China"},
                                    {y: 3125844, legendText: "RU", exploded: true, indexLabel: "Russia"},
                                    {y: 1176121, legendText: "US", indexLabel: "U.S."},
                                    {y: 1727161, legendText: "UK", indexLabel: "U.K"},
                                    {y: 4303364, legendText: "UAE", indexLabel: "U.A.E"},
                                    {y: 1717786, legendText: "SA", indexLabel: "South Africa"}
                                ]
                            }
                        ]
                    });
            chart.render();

            var chart = new CanvasJS.Chart("chartContainer3", {
                title: {
                    text: "Site Traffic January-2021",
                    fontSize: 30
                },
                animationEnabled: true,
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


            var chart = new CanvasJS.Chart("chartContainer4", {
                title: {
                    text: "January-2018 Sells"
                },
                animationEnabled: true,
                axisX: {
                    interval: 10
                },
                data: [{
                        type: "line",
                        dataPoints: [
                            {x: 10, y: 45},
                            {x: 20, y: 14},
                            {x: 30, y: 20},
                            {x: 40, y: 60},
                            {x: 50, y: 50},
                            {x: 60, y: 80},
                            {x: 70, y: 40},
                            {x: 80, y: 60},
                            {x: 90, y: 10},
                            {x: 100, y: 50},
                            {x: 110, y: 40},
                            {x: 120, y: 14},
                            {x: 130, y: 70},
                            {x: 140, y: 40},
                            {x: 150, y: 90},
                        ]
                    }]
            });
            chart.render();

        }
    </script>
    <div class="row">
        <div class="col-md-6">
            <div id="chartContainer" style="height: 400px; width: 100%;"></div>
        </div>
        <div class="col-md-6">
            <div id="chartContainer3" style="width: 100%; height: 400px;"></div>
        </div>
        <div id="chartContainer4" style="height: 400px; width: 100%; margin-top: 30px;"></div>
    </div> 
    

</div>
        
      
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/canvasjs.min.js" type="text/javascript"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
	
		
   
  </body>
</html>