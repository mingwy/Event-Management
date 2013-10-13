<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	
	// Obtain sid of the supply to be deleted
	// Obtain aid of the activity modified
	
	// Delete supply
	$sql="DELETE FROM Supply WHERE sid='$sid' AND activity='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 supply deleted";	
	
	
	mysqli_close($con);
 ?> 