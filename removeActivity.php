<?php

	include 'includes/connect.php';
	$con=goAndConnectToDatabase("localhost","root","", "a1847667_ems");
	
	// Obtain aid of the activity to be removed
	// Obtain tid of the template modified
	
	// Remove activity from template
	$sql="DELETE FROM TemplateActivity WHERE activity='$aid' AND workshoptemplate='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 activity removed";		
	
	
	mysqli_close($con);
 ?> 