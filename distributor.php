<?php
$servername ="sql6.freesqldatabase.com";
$username = "sql6514116";
$password = "3vMxR7TddU";
$dbname ="sql6514116";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//sql query
$sql = "SELECT distributor_id, SUM(Quantity) FROM producer GROUP BY distributor_id";
$result = $conn->query($sql);

//display data on web page
while($row = mysqli_fetch_array($result)){
    //$sql = "INSERT INTO distributor ($row)";
    echo "Total ". $row['distributor_id']. " = ". $row['SUM(Quantity)'];
  //   =  ;
  $loc=$row["distributor_id"];
  $quan= $row["SUM(Quantity)"];

   $sql = "INSERT INTO distributor(distributor_id,Quantity) values ('$loc','$quan')"; 
   $result1 = mysqli_query($conn,$sql);
   header('location:cumulative.html');
   echo "<br />";
}
//close the connection

$conn->close();
?>
</body>
</html>
