<?php
$servername = "localhost";
$username = "login";
$password = "user";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
   echo "Connection Failed".mysqli_connect_error();
}

mysqli_select_db($conn,'hospital_management');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query ="INSERT INTO users (firstname,lastname,Email,password) 
VALUES ('$firstname','$lastname','$email','$password')";
echo "$query";
mysqli_query($conn,$query);

header('location:index.html');

?>