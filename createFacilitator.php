<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();


	//Create facilitors
	$sql="INSERT INTO Facilitator (firstname, lastname)
	VALUES
	('$firstname','$lastname')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 facilitator added";
	
	
	mysqli_close($con);
 ?> 