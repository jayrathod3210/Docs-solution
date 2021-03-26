<?php
include('include/db.php');
if(!empty($_POST["specializationid"])) 
{
	$sql=mysqli_query($con,"select docName,d_id from doctor where specialist='".$_POST['specializationid']."'");?>
	<option selected="selected">Select Doctor </option>
	<?php
	while($row=mysqli_fetch_array($sql))
 	{?>
	<option value="<?php echo htmlentities($row['d_id']); ?>"><?php echo htmlentities($row['docName']); ?></option>
	<?php
	}
}
if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docFees from doctor where d_id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
	<option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
	}
}

?>

