<?php
$servername ="sql6.freesqldatabase.com";
$username = "sql6514116";
$password = "3vMxR7TddU";
$dbname ="sql6514116";

$name = $_POST['name'];
$Mobilenumber=$_POST['Mobilenumber'];
$Location=$_POST['Location'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    die('Connection Error'.mysqli_error($conn));

}
else{

        
    
        $checkproducer_register =  "SELECT * from producer_register  ORDER BY id desc limit 1";
        $checkresult = mysqli_query($conn,$checkproducer_register);
        if(mysqli_num_rows($checkresult)>0) 
        {
            if($row = mysqli_fetch_assoc($checkresult)){
                $producer_register  = $row['producer_id'];
                $get_numbers = str_replace("PR","",$producer_register);
                $id_increase = $get_numbers+1;
                $get_string = str_pad($id_increase,5,0, STR_PAD_LEFT);
                $id =  "PR".$get_string;

                $insert_qry ="Insert into producer_register (producer_id,name,Mobilenumber,Location) Values ('$id','$name','$Mobilenumber','$Location')";
                $result = mysqli_query($conn,$insert_qry);
                if($result)
                {
                   
                    header('location:register.html');    

                }
                else{
                    echo"error";
                } 


            }
        }
            else{
                $id  = "PR00001";
                $insert_qry ="Insert into producer_register (producer_id,name,Mobilenumber,Location) Values ('$id','$name','$Mobilenumber','$Location')";

                $result = mysqli_query($conn,$insert_qry);
                if($result)
                {
                   
                    header('location:register.html'); 

                }
                else{
                    echo"error";
                }

            }
    
}