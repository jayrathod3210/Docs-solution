
<?php 
	
	//session_start();
	$con = mysqli_connect('localhost','root','');
	// Login to doctors account
	$db = mysqli_select_db($con,'php_has');
	//$_SESSION["ErrorMessage"]="";
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql= "select * from admin where username='$username' and password='$password'";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
			if($row == 1){
				echo "login successfully";
				$_SESSION['username']=$username;
				header('location:dashboard.php');
			}else{
				$_SESSION['errmsg']="Invalid username or password";
				header('location:adminlogin.php');
				return false;
			}
		
	}
?>
