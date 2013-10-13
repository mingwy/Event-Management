<?php
	include 'includes/connect.php';
	$con=goAndConnectToDatabase();

	
    // name of the activity
    $aname=$_POST[''];
    
	// Obtain aid of the activity to be edited
	$sql="SELECT tid FROM Activity WHERE name='$aname'";
 
	if (!($result=mysqli_query($con,$sql)))
	{
	die('Error: ' . mysqli_error());
	}
	$row=mysqli_fetch_array($result,MYSQLI_NUM);
	$aid=$row[0];
	mysqli_free_result($result);
	
	
	$change=$POST[''];
	
	// Edit name
	if($change=="1")
	{
	$newName=$_POST[''];
	$sql="UPDATE Activity SET name='$newName' WHERE aid='$aid'";
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
	$sql="UPDATE Activity SET duration='$newDuration' WHERE aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "duration edited";		
    }
	
    
	// Edit objective
	if($change=="3")
	{
	$newObjective=$_POST[''];
	$sql="UPDATE Activity SET objective='$newObjective' WHERE aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "objective edited";	
    }
	
    
    // Edit note
	if($change=="4")
	{
	$newNote=$_POST[''];
	$sql="UPDATE Activity SET note='$newNote' WHERE aid='$aid'";
	if (!mysqli_query($con,$sql))
	{
	die('Error: ' . mysqli_error());
	}
	echo "note edited";	
    }
    
    
	mysqli_close($con);
 ?> 