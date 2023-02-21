<?php 


$servername ="sql6.freesqldatabase.com";
$username = "sql6514116";
$password = "3vMxR7TddU";
$dbname ="sql6514116";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    $Mobilenumber = $_POST['Mobilenumber'];
    $Password = $_POST['psw'];
    $query = "select * from signup where Mobilenumber = '" . $Mobilenumber. "' AND Password = '" . $Password . "'";
    $mysqli = mysqli_query($conn, $query);
    if (mysqli_num_rows($mysqli) == 1) {
        header('Location:session.php');
        echo "success";
        exit;
    } else {    
        //header('Location: login.html');
        echo "na";
        header('Location:signup.html');
        exit;
    }
?>