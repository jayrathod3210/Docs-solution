<?php
session_start();

// Login to patient account
function loginfuntion($email,$password)
{
	

	//LOGIN QUERY
$resultlogin = mysql_query("SELECT * FROM patients WHERE email ='$email' AND password='$password' ");

$resultlogin2 = mysql_query("SELECT * FROM patients WHERE email ='$email' AND password!='$password' ");
// LOGIN VALIDATON
	if(mysql_num_rows($resultlogin) == 1)
	{
 				$_SESSION["email"] =$email;
				$_SESSION["usertype"] = "PATIENT";
				$resultpro = mysql_query("SELECT * FROM patients WHERE email ='$_SESSION[email]'");
				while($row = mysql_fetch_array($resultpro))
  				{
					$_SESSION["patname"] =  $row['fullName']; 	 	
  				}
	}
	
	elseif(mysql_num_rows($resultlogin2) == 1)
	{
		$is= "Invalid Password.(Enter your Registered Password)";
		return $is; 
	}
	else
	{
		$in= "Login ID not Exists. ";
	return $in;
	}
	

  
}
	

?>