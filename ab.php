<!DOCTYPE html>
<html lang="en">
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
    <h1>Distributor</h1> 
    <br>
    <table class="table">
      <table border="3"
      bgcolor="SkyBlue">
        <thead>
            <tr>
               
                <th>MOBILENUMBER</th>
                <th>DISTRIBUTOR_ID</th>
                <th>STORAGE</th>
                <th>STORAGE LOCATION</th>
                <th>QUANTITY</th>
                <th>PRODUCTS AVAILABLE</th>
                <th>HOME</th>
                
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
//$sql1 = "SELECT Quantity FROM distributor Where distributor_id='DR000001";
//$sql="SELECT distributor_register.Mobilenumber, distributor_register.distributor_id,distributor_register.max_quantity
//FROM distributor_register.Quantity =producer.Quantity";
$sql = "SELECT Mobilenumber,distributor_id,max_quantity,Location,products FROM distributor_register";
//$sql = "SELECT Quantity FROM distributor WHERE distributor_id  = $row ['distributer_id']";
$result = $conn->query($sql);
//$result1 = $conn->query($sql1);
if ($result->num_rows > 0) 
  // output data of each row
  while($row = $result->fetch_assoc())
  {$sql1 = "SELECT Quantity FROM distributor WHERE distributor_id ='".$row['distributor_id']."'";
  $result1 =$conn->query($sql1);
  $value=mysqli_fetch_array($result1);
  if(is_null($value[0]))
  $value[0]=0;

  error_reporting(E_ERROR | E_PARSE);
  

  

    echo "<tr>
    
    <td>".$row["Mobilenumber"]."</td>
    <td>".$row["distributor_id"]."</td>
    <td>".$row["max_quantity"]."</td> 
    <td>".$row["Location"]."</td> 
    <td>".$row["products"]."</td> 
 
     <td>".$value[0]."</td> 
 
 
    <td>
        <a class='btn btn-primary btn-sm' href='test.html'>Click</a>

     </td>
    </tr>";

  }
?>
</tbody>
</table>
