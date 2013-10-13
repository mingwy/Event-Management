<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	
	// name of the workshop template to be edited
	$tname=$POST_[''];
	
	// Find tid of the template
	$sql="SELECT tid FROM WorkshopTemplate WHERE name='$tname'";
 
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error: ' . mysqli_error());
	}
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$tid=$row[0];
	mysqli_free_result($result);
	
	
	$change=$POST[''];
	
	// Edit name
	if($chnage=="1")
	{
	$newName=$_POST[''];
	$sql="UPDATE WorkshopTemplate SET name='$newName' WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "name edited";	
    }
	
    
	// Edit duration
	if($change=="2")
	{
	$newDuration=$_POST[''];
	$sql="UPDATE WorkshopTemplate SET duration='$newDuration' WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "duration edited";		
    }
    
    
    // Edit summary
	if($change=="3")
	{
    $newSummay=$_POST[''];
	$sql="UPDATE WorkshopTemplate SET summary='$newSummary' WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "summary edited";		
    }
    
    
	// Edit objective
	if($change=="4")
	{
	$newObjective=$_POST[''];	
	$sql="UPDATE WorkshopTemplate SET objective='$newObjective' WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "objective edited";	
    }
    
    
    // Edit evaurl
	if($change=="5")
	{
	$newEvaurl=$_POST[''];
	$sql="UPDATE WorkshopTemplate SET evaurl='$newEvaurl' WHERE tid='$tid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "evaluation url edited";		
    }
	
    
	mysqli_close($con);
 ?> 