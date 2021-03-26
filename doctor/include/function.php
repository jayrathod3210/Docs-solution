<?php 
	
	//session_start();
	$con = mysqli_connect('localhost','root','');
	// Login to doctors account
	$db = mysqli_select_db($con,'php_has');
	if(isset($_POST['submit']))
	{
		$docName = $_POST['docName'];
		$password = $_POST['password'];
		
		$sql= "select * from doctor where docName='$docName' and password='$password'";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
			if($row == 1){
				echo "login successfully";
				$_SESSION['docName']=$docName;
				header('location:dashboard.php');
			}else{
				echo "login fail";
				header('location:doclogin.php');
			}
		
	}
?>
