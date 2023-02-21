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
$Aadhaar = $_REQUEST['Aadhaar'];
$Name =$_REQUEST['Name'];
$Mobilenumber =  $_REQUEST['Mobilenumber'];
$Address =  $_REQUEST['Address'];
$Category =  $_REQUEST['Category'];
$Password =  $_REQUEST['Password'];
$Location =  $_REQUEST['Location'];  //need to add many street and city to get live location of the user its jus basic


// Performing insert query execution
// here our table name is college

 

$sql = "INSERT INTO signup (Aadhaar,Name,Mobilenumber,Address,Category,Password,Location) VALUES ( '$Aadhaar','$Name','$Mobilenumber', '$Address','$Category','$Password','$Location')";
#$sql = "INSERT INTO signup (Aadhaar,Name,Mobilenumber,Address,Category,Password,Location) VALUES ( '900034438778','tommy','4567890975', 'bit,sathy,erode','distributer','123456','bit college')";



if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
  header('location:Login.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>