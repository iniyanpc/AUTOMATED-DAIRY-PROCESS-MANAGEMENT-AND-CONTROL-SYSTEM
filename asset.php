<?php
$servername ="sql6.freesqldatabase.com";
$username = "sql6514116";
$password = "3vMxR7TddU";
$dbname ="sql6514116";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Material = $_REQUEST['Material'];
$Mobilenumber =  $_REQUEST['Mobilenumber'];
$WorkingCondition =  $_REQUEST['WorkingCondition'];
$Distributor_id =  $_REQUEST['Distributor_id'];
$Scheme =  $_REQUEST['Scheme'];
$Location =  $_REQUEST['Location'];


// Performing insert query execution
// here our table name is college

 

$sql = "INSERT INTO asset (Material,Mobilenumber,WorkingCondition,Distributor_id,Scheme,Location) VALUES ( '$Material','$Mobilenumber', '$WorkingCondition','$Distributor_id','$Scheme','$Location')";

#$sql = "INSERT INTO asset (Material,Mobilenumber,WorkingCondition) VALUES ( 'laptop','4545454545', 'repair')";


if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
  header('location:materials.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
