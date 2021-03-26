<?php 
	
	//session_start();
	$con = mysqli_connect('localhost','root','');
	// Login to doctors account
	$db = mysqli_select_db($con,'php_has');
	if(isset($_POST['submit']))
	{
		$fullName = $_POST['fullName'];
		$password = $_POST['password'];
		
		$sql= "select * from patients where fullName='$fullName' and password='$password'";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
			if($row == 1){
				echo "login successfully";
				$_SESSION['fullName']=$fullName;
				header('location:dashboard.php');
			}else{
				echo "login fail";
				header('location:patlogin.php');
			}
		
	}
?>
