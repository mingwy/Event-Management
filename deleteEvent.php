<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	// eid of the event to be deleted
    $eid=$_POST[''];
	
	// Delete event
	$sql="DELETE FROM WorkshopEvent WHERE eid='$eid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 event deleted";	
	
	// Delete event facilitator relation
	$sql="DELETE FROM EventFacilitator WHERE event='$eid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "event facilitator relation deleted";		
	
	
	mysqli_close($con);
 ?> 