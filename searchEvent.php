<?php

	include 'includes/connect.php';
	$con=goAndConnectToDatabase("localhost","root","", "a1847667_ems");
	
	// Obtain tid of the template
	
	// Search all events that use the teamplate
	$sql="SELECT eid FROM WorkshopEvent WHERE workshoptemplate='$tid'";
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error: ' . mysqli_error());
	}		
	
	if(mysqli_num_rows($result)>0)
	{
	$eidList=array();
	while($row=mysqli_fetch_array($result,MYSQLI_NUM))
    {
    array_push($eidList,$row[0]);
    }
    }
    else
    {
    echo "No event found";
	}
	
	mysqli_close($con);
 ?> 