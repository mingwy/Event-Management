<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase("localhost","root","", "a1847667_ems");

	
	// name of the activity to be deleted
	$aname=$POST_[''];
	
	// Find aid of the activity
	$sql="SELECT aid FROM Activity WHERE name='$aname'";
 
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error: ' . mysqli_error());
	}
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$aid=$row[0];
	mysqli_free_result($result);
	
	
	// Delete activity
	$sql="DELETE FROM Activity WHERE aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 activity deleted";	
	
	
	// Delete activity file relation
	$sql="DELETE FROM ActivityFile WHERE aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "activity file relation deleted";		
	
	
	// Delete template activity relation
	$sql="DELETE FROM templateActivity WHERE activity='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "template activity relation deleted";
	
	
	// Delete suppliers
	$sql="DELETE FROM Supply WHERE activity='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "suppliers deleted";
		
	
	mysqli_close($con);
 ?> 