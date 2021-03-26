<?php
include('include/db.php');

if(!empty($_POST["patient"])) 
{

 $sql=mysqli_query($con,"select email from patients where patname='".$_POST['patient']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
	<option value="<?php echo htmlentities($row['email']); ?>"><?php echo htmlentities($row['email']); ?></option>
  <?php
	}
}

?>

