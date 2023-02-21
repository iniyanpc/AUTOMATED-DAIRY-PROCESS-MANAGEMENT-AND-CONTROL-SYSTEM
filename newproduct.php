<!DOCTYPE html>
<html lang="en">
<body>
<style>
body {
  background-image: url("imgg/background.jpg"); 
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesh";
</head>
<center>
<body style="margin: 50px;">
    <h1>New product</h1> 
    <br>
    <table class="table">
      <table border="3"
      bgcolor="SkyBlue">
        <thead>
            <tr>
                <th><b>Material</th>
                <th><b>WorkingCondition</b></th>
                <th><B>Mobilenumber</B></th>
                
</tr>
</thead>
<tbody>

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

$sql = "SELECT Material,WorkingCondition,Mobilenumber FROM asset where WorkingCondition = 'New product' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
  // output data of each row
  while($row = $result->fetch_assoc())

  {
    echo "<tr>
    <td>".$row["Material"]."</td> 
    <td>".$row["WorkingCondition"]."</td>
    <td>".$row["Mobilenumber"]."</td>
    <td>
    

     </td>
    </tr>";

  }
?>
