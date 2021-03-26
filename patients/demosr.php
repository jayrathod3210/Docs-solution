<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php //include('header.php'); ?>
<?php //include('uptomenu.php'); ?>

	<div class="search form-group"  style="background-color: #7faf81;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search result</h3>
		
	</div>
<!-- result -->

					<?php 
					include('include/db.php');
					$_SESSION["specialist"]="";
				    $_SESSION["city"]="";
					$sql = " SELECT * FROM doctor WHERE city = '" .$_SESSION["city"]."' AND specialist = '" . $_SESSION["specialist"]."' ";
					$result = mysql_query($sql);
					$count = mysql_num_rows($result);
					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>SL.</th>
								<th>Name</th>
								<th>City</th>
								<th>Address</th>
								
								<th>Mobile</th>
								
								<th>Email</th>
								<th>Specialist in</th>
								<th>Fee</th>
								<th>Book</th>
								
							</tr>";
						while($row=mysql_fetch_array($result)){
								echo "<tr>";
								//echo "<td>".$row['d_id']."</td>";
								echo "<td>".$row['docName']."</td>";
								echo "<td>".$row['city']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['contactno']."</td>";
								echo "<td>".$row['docemail']."</td>";

								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['docFees']."</td>";
						?>
							<td><a href="booking.php?docName=<?php echo $row['docName'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					<!-- result -->


	<button style="margin-left: 605px;background-color:#332f30;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="search_doctor.php">Search Again</a></button>
	
 <?php //include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
