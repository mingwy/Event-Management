<html>
<?php
// Create connection
$con = mysql_connect("127.0.0.1","root","")
or die('Could not connect: ' . mysql_error());
//select database
mysql_select_db("peernetbc", $con);
//Select The database
$bool = mysql_select_db("peernetbc", $con);
if ($bool === False){
   print "can't find peernetbc";
}
  
//insert into Activity table 6
mysql_query("INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Responding to Triggers', 2, 'How to deal with triggers', '' )",$con);

mysqli_query($con,"INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Conflict Strategies', 1.5, 'How to deal with conflict', 'diagram attached' )");

mysqli_query($con,"INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Assertive Messages', 1, 'self confidence building', 'form attached' )");

mysqli_query($con,"INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Lunch', 0.5, 'Get food', 'try to make participants engaged' )");

mysqli_query($con,"INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Introduction', 0.5, 'Brief introduction of the whole workshop', 'Try to do it in point form' )");

mysqli_query($con,"INSERT INTO Activity (name, duration, objective, notes) VALUES 
('Discussion', 1, 'Group discussion', 'Encourage interactions among group' )");

//insert into WorkshopTemplate table 5
//1
mysqli_query($con,"INSERT INTO `WorkshopTemplate` (`name`,`summary`,`objective`,`evaurl`) VALUES 
('euismod est','Fusce diam nunc,','parturient montes, nascetur','in,.com')");
//2
mysqli_query($con,"INSERT INTO `WorkshopTemplate` (`name`,`summary`,`objective`,`evaurl`) VALUES 
('Sed eu nibh vulputate','Aliquam nec enim. Nunc ut','cursus et, eros.','ante dictum mi, ac mattis.com')");
//3
mysqli_query($con,"INSERT INTO `WorkshopTemplate` (`name`,`summary`,`objective`,`evaurl`) VALUES 
('eleifend. Cras sed','tristique pellentesque,','et,','nonummy ac, feugiat non.com')");
//4
mysqli_query($con,"INSERT INTO `WorkshopTemplate` (`name`,`summary`,`objective`,`evaurl`) VALUES 
('dignissim tempor arcu. Vestibulum ut','quis diam. Pellentesque','Curabitur ut odio','nec ante..com')");
//5
mysqli_query($con,"INSERT INTO `WorkshopTemplate` (`name`,`summary`,`objective`,`evaurl`) VALUES ('rhoncus.','justo sit amet nulla. Donec','malesuada fames','metus sit amet.com')");

//insert into WorkshopEvent table 10
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('09-11-12','P.O. Box 777, 7440 Massa Av.','30','3')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('11-16-13','P.O. Box 800, 3379 Nascetur Road','32','4')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('11-02-13','P.O. Box 151, 4884 Ultricies St.','6','4')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('11-13-12','318-9341 Donec Avenue','48','5')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('05-16-13','3446 Penatibus St.','48','1')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('03-25-13','Ap #585-3888 Donec Ave','47','4')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('01-24-14','904-797 Praesent Street','30','5')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('01-12-13','P.O. Box 861, 7122 Non St.','3','1')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('06-25-13','P.O. Box 833, 6285 Diam Avenue','12','4')");
mysqli_query($con,"INSERT INTO `WorkshopEvent` (`date`,`location`,`numPart`,`template`) VALUES ('02-08-13','Ap #148-8949 Hendrerit St.','13','3')");


//insert into TemplateActivity table 10
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('2','2')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('3','3')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('5','2')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('4','2')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('2','4')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('3','1')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('3','4')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('1','3')");
mysqli_query($con,"INSERT INTO `TemplateActivity` (`activity`,`workshoptemplate`) VALUES ('5','5')");

//insert into File table 6
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('eu, ligula. Aenean')");
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('et nunc.')");
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('sapien. Cras dolor dolor, tempus non,')");
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('iaculis enim,')");
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('mus. Donec')");
mysqli_query($con,"INSERT INTO `File` (`fileURL`) VALUES ('dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus')");

//insert into ActivityFile table 6
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('3','2')");
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('1','4')");
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('2','1')");
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('4','3')");
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('1','6')");
mysqli_query($con,"INSERT INTO `ActivityFile` (`activity`,`file`) VALUES ('4','2')");

//insert into Supply table 10
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('lacinia','3')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('sem','1')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('Aenean','4')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('eleifend','2')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('nunc','2')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('Fusce','4')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('diam','3')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('arcu.','2')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('semper','1')");
mysqli_query($con,"INSERT INTO `Supply` (`item`,`activity`) VALUES ('quis','5')");

//insert into Facilitator table 4
mysqli_query($con,"INSERT INTO `myTable` (`firstname`,`lastname`) VALUES ('porttitor','molestie')");
mysqli_query($con,"INSERT INTO `myTable` (`firstname`,`lastname`) VALUES ('pretium','Nulla')");
mysqli_query($con,"INSERT INTO `myTable` (`firstname`,`lastname`) VALUES ('sit','ut')");
mysqli_query($con,"INSERT INTO `myTable` (`firstname`,`lastname`) VALUES ('massa.','quis')");

//insert into EventFacilitator
mysqli_query($con,"INSERT INTO `myTable` (`facilitator`,`event`) VALUES ('1','10')");
mysqli_query($con,"INSERT INTO `myTable` (`facilitator`,`event`) VALUES ('2','7')");
mysqli_query($con,"INSERT INTO `myTable` (`facilitator`,`event`) VALUES ('3','6')");
mysqli_query($con,"INSERT INTO `myTable` (`facilitator`,`event`) VALUES ('1','7')");




mysqli_close($con);

?>

</html>