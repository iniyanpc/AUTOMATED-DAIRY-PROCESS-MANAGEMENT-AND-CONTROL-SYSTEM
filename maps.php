
<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }

?>
<style>
   body{background-image:url("imgg/background.jpg");background-repeat: no-repeat;} 
    .button {
  max-width: 200px;
  padding: 34px;
  border-radius: 10px;
  background-image:url("color.jpg");
  

}
.button [type=text]{
 padding: 5px;
    width: 200px;
    border-radius:15px;

}
.button [type=submit]{
    padding: 10px;
    width: 100px;
    background-color:lightgreen;
    border-radius:15px;

}
</style>
<form method="POST">

 <p>
 <div class=button>
        <input type="text" name="address" placeholder="Enter address">
    </p>
    
    <input type="submit" name="submit_address">
    </div>
</form>