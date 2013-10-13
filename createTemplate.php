<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

 
	// Obtain the input info
	$name=$_POST[''];
	$duration=$_POST[''];
	$summary=$_POST[''];
	$objective=$_POST[''];
	$evaurl=$_POST[''];
	
	// Create workshop template
	$sql="INSERT INTO WorkshopTemplate (name, duration, summary, objective, evaurl)
	VALUES
	('$name','$duration','$summary','$objective','$evaurl')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 workshop template added";
	
	$tid=mysqli_insert_id($con);
 
	mysqli_close($con);
 ?> 