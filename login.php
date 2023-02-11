<?php

$host = "localhost"; 
$user = "root";
$password = '';
$db_name = "workshop_db";

$con = mysqli_connect($host, $user, $password, $db_name); 
$email = $_POST['email'];  
$password = $_POST['password'];  
      
$sql = "select * from users where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
if($count == 1){  
echo "<h1><center> Login successful </center></h1>";  
echo "<center>Username : ".$row['username']."</center>"; 
echo "<center>Email : ".$row['email']."</center>"; 
echo "<center>Phone : ".$row['phone']."</center>";     
}  
else{  
echo "<h1> Login failed. Invalid username or password.</h1>";  
}     

?>