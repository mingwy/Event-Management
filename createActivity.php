<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

 
	// Obtain the input info
	$name=$_POST[''];
	$duration=$_POST[''];
	$objective=$_POST[''];
	$note=$_POST[''];
	
	// Create new activity
	$sql="INSERT INTO Activity (name, duration, objective, notes)
	VALUES
	('$name','$duration','$objective','$note')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 activity added";
 
	// name of the item
	$itemList=$_POST[''];
	
	// Create suppliers
	$aid=mysqli_insert_id($con);
	foreach($itemList as $item)
	{
	$sql="INSERT INTO Supply (item, activity)
	VALUES
	('$item','$aid')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 supplier added";
	}
	
	
	// url of the file
	$fileList=$_POST[''];
	
	// Add files to activity
	foreach($fileList as $fileurl)
	{
	// Check if the file already exists
	$sql="SELECT fid FROM File WHERE fileurl='$fileurl'";
	if (!$result=mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	$row = mysqli_fetch_array($result,MYSQLI_NUM);
	
	// Create file if not exist
	if(!($fid=$row[0]))
	{
	$sql="INSERT INTO File (fileurl)
	VALUES
	('$fileurl')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 file added";
	
	$fid=mysqli_insert_id($con);
	mysqli_free_result($result);	
	}


	// Link file to activity
	$sql="INSERT INTO ActivityFile (aid, fid)
	VALUES
	('$aid','$fid')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 activity file relation added";
	
	}		
	
 
	mysqli_close($con);
 ?> 