<?php

function goAndConnectToDatabase()
{
	$con=mysqli_connect("127.0.0.1","root","", "data");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	return NULL;
	}

	return $con;
}





?>