<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	
	// Obtain fid of the file to be deleted
	$fid=$_POST[''];
	
	// Delete file
	$sql="DELETE FROM File WHERE fid='$fid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 file deleted";	
	
	// Delete activity file relation
	$sql="DELETE FROM ActivityFile WHERE file='$fid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "activity file relation deleted";		
	
	
	mysqli_close($con);
 ?> 