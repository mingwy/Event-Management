<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

 
	// Obtain id of the workshop template used
	$tname=$_POST['event_temp_name'];
	
	// Find tid of the template
	$sql="SELECT tid FROM WorkshopTemplate WHERE name='$tname'";
 
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error1: ' . mysqli_error());
	}
	
	if(!(mysqli_num_rows($result)>0))
	{
	$tid="0";	
	}
	else
	{
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$tid=$row[0];
	}
	// Obtain the input info
	/**$dateinput=$_POST['dateinput'];
	$location=$_POST['event_location'];
	$numPart=$_POST['event_nump'];
	
	// Create workshop event
	$sql="INSERT INTO WorkshopEvent (date,location,numPart,workshoptemplate)
	VALUES
	('$dateinput','$location','$numPart','$tid')";
	
 	echo"$dateinput. $location. $numPart. $tid";
	
	if (!mysqli_query($con,$sql))
	{
	die('Error2: ' . mysqli_error());
	}
	echo "1 workshop event added";
	 * 
	 */
	$eid=mysqli_insert_id($con);
	
	//
	$firstname=$_POST['event_facil'];
	$lastname=$_POST['event_facil'];
	
	//Create facilitors
	$sql="INSERT INTO Facilitator (firstname, lastname)
	VALUES
	('$firstname','$lastname')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error3: ' . mysqli_error());
	}
	echo "1 facilitator added";
	$fid=mysqli_insert_id($con);
	
	
	// Connect workshop template and facilitator
	$sql="INSERT INTO EventFacilitator (fid, eid)
	VALUES
	('$fid','$eid')";
 
	if (!mysqli_query($con,$sql))
	{
	die('Error4: ' . mysqli_error());
	}
	echo "1 workshop template facilitator relation added";	
	
 
	mysqli_close($con);
 ?> 