<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

    // name of the template to be deleted
	$tname=$_POST[''];
	
	// Obtain tid of the template to be deleted
    $sql="SELECT tid FROM WorkshopTemplate WHERE name='$tname'";
 
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error: ' . mysqli_error());
	}
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$tid=$row[0];
	mysqli_free_result($result);
	
	
	// Delete template
	$sql="DELETE FROM WorkshopTemplate WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 workshop template deleted";	
	
	
	// Delete template activity relation
	$sql="DELETE FROM TemplateActivity WHERE workshoptemplate='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "1 template activity relation deleted";		
	
	
	// Update events that use the template
	$default="0";
	$sql="UPDATE WorkshopEvent SET workshoptemplate='$default' WHERE workshoptemplate='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "event updated";	
	
	
	mysqli_close($con);
 ?> 