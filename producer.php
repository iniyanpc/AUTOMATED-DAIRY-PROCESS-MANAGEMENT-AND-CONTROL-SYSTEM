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
$Mobilenumber = $_REQUEST['Mobilenumber'];
$Quantity = $_REQUEST['Quantity'];
$distributor_id = $_REQUEST['distributor_id'];
#$address = $_REQUEST['address'];
#$email = $_REQUEST['email'];
 
// Performing insert query execution
// here our table name is college
#$sql = "INSERT INTO college  VALUES ('$first_name','$last_name','$gender','$address','$email')";
 

$sql = "INSERT INTO producer (Mobilenumber,Quantity,distributor_id) VALUES ('$Mobilenumber','$Quantity', '$distributor_id')";
#$sql = "INSERT INTO producer (Mobilenumber,Location,Quantity) VALUES ('1243567890', 'Sathy', '133')";

if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
  header("location:producer.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>