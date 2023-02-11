<?php

$host = "localhost"; 
$user = "root";
$password = '';
$db_name = "workshop_db";

$con = mysqli_connect($host, $user, $password, $db_name); 
$email = $_POST['email'];  
$password = $_POST['password'];  
$username = $_POST['username'];  
$phone = $_POST['phone'];  
      
$sql = "insert into users (email, username, phone, password) VALUES ('$email', '$username', '$phone', '$password')";  

if(mysqli_query($con, $sql)){
    echo "<h1><center> Registration successful </center></h1>";  
    echo "<a href='login.html'><h3><center> Now Login Here </center></h3></a>";  

}
else{  
    echo "<h1> Something Went Wrong!</h1>";  
}     
    

?>