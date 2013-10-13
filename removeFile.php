<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase("localhost","root","", "a1847667_ems");

	
	// Obtain fid of the file to be removed
	// Obtain aid of the activity modified
	
	// Remove file from activity
	$sql="DELETE FROM ActivityFile WHERE fid='$fid' AND aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 file removed";		
	
	
	mysqli_close($con);
 ?> 