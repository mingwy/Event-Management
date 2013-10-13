<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	
	// Obtain id of the facilitator to be deleted
	
	// Delete facilitator
	$sql="DELETE FROM Facilitator WHERE id='$facid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 facilitator deleted";	
	
	// Delete event facilitator relation
	$sql="DELETE FROM EventFacilitator WHERE facilitator='$facid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "event facilitator relation deleted";		
	
	
	mysqli_close($con);
 ?> 