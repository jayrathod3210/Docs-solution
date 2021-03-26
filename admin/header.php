<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">

<style>

input[type=text],input[type=password],input[type=phone]{
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid blue;
    border-radius: 4px;
    box-sizing: border-box;
}
#da{
	width:100px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid blue;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=reset] {
    width: 250px;
	align:center;
    background-color:blue;
    color: white;
	font-style:b;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: black;
}
input[type=submit] {
    width: 200px;
	align:center;
    background-color:blue;
    color: white;
	font-style:b;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#xy{
    width: 500px;
	align:center;
    background-color:blue;
    color: white;
	font-style:b;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#xy:hover {
    background-color: black;
}
#btnapp{
    width: 500px;
	align:center;
    background-color:blue;
    color: white;
	font-style:b;
    padding: 14px 20px;
    margin: 8px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#btnapp:hover {
    background-color: black;
}
input[type=submit]:hover {
    background-color: black;
}
td{
	color:black;
	font:20px solid;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.footer {
		
    width: 100%;
    background-image: none;
    background-repeat: repeat;
    background-attachment: scroll;
    background-position: 0% 0%;
    bottom: 0pt;
    left: 0pt;}
	

	
</style>

<script type="text/javascript" src="js\jquery_addr.js"></script>  
<script type="text/javascript" src="js\state.js"></script>  
<script>

function check(){
				var state = document.getElementById("listBox").value;
					
				 
					
				
				if(state=="SELECT STATE"){
					alert("Please enter your state");
					document.getElementById("state").focus();
					document.getElementById("state").style.borderColor="red";
					return false;
				}
				document.register.submit();
			}
			
		</script>








	</style>
<title>24X7 Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="styles/navi.css">
				
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="scripts/jquery.hslides.1.0.js"></script>
<script type="text/javascript" src="scripts/jquery.hslides.setup.js"></script>
 		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	
 <?php
error_reporting(E_ERROR | E_PARSE);

    ?>
</head>
<body class="page1" id="top" style="background-color:white">
  