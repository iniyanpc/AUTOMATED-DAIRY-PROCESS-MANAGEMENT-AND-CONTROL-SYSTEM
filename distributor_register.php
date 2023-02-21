<?php
$servername ="sql6.freesqldatabase.com";
$username = "sql6514116";
$password = "3vMxR7TddU";
$dbname ="sql6514116";
    
$name = $_POST['name'];
$Mobilenumber=$_POST['Mobilenumber'];
$Location=$_POST['Location'];
$max_quantity=$_POST['max_quantity'];
$products=$_POST['products'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    die('Connection Error'.mysqli_error($conn));

}
else{

    
        $checkdistributor_register =  "SELECT * from distributor_register  ORDER BY id desc limit 1";
        $checkresult = mysqli_query($conn,$checkdistributor_register);
        if(mysqli_num_rows($checkresult)>0) 
        {
            if($row = mysqli_fetch_assoc($checkresult)){
                $distributor_register  = $row['distributor_id'];
                $get_numbers = str_replace("DR","",$distributor_register);
                $id_increase = $get_numbers+1;
                $get_string = str_pad($id_increase,5,0, STR_PAD_LEFT);
                $id =  "DR".$get_string;

                $insert_qry ="Insert into distributor_register (distributor_id,name,Mobilenumber,Location,max_quantity,products) Values ('$id','$name','$Mobilenumber','$Location','$max_quantity','$products')";
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
                $id  = "DR00001";
                $insert_qry ="Insert into distributor_register (distributor_id,name,Mobilenumber,Location,max_quantity)Values('$id','$name','$Mobilenumber','$Location','$max_quantity')";

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
