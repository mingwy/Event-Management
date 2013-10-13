<?php
#Include the connect.php file
include('connect.php');
#Connect to the database
//connection String
$connect = mysql_connect($hostname, $username, $password)
or die('Could not connect: ' . mysql_error());
//select database
mysql_select_db($database, $connect);
//Select The database
$bool = mysql_select_db($database, $connect);
if ($bool === False){
   print "can't find $database";
}
// get data and store in a json array
//$query = "SELECT * FROM customers";
#$query = "SELECT eid, numPart, name,summary, location, date FROM workshoptemplate, workshopevent WHERE workshoptemplate = tid";
$query = "SELECT tid, duration, name, objective, summary FROM workshoptemplate";

$from = 0;
$to = 30;
$query .= " LIMIT ".$from.",".$to;
 
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $customers[] = array(
        'tid' => $row['tid'],
		'name' => $row['name'],
        'objective' => $row['objective'],
    'duration' => $row['duration'],
    'summary' => $row['summary'],
	  );
}
 
echo json_encode($customers);
?>