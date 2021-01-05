<?php
$servername = "localhost";
$username = "login";
$password = "user";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
   echo "Connection Failed".mysqli_connect_error();
}

mysqli_select_db($conn,'hospital_management');


// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];
// $a_password = $_POST['password'];
// $phone = $_POST['phone'];
// $gender = $_POST['gender'];
// $a_location= $_POST['location'];
// $dob = $_POST['dob'];


// $sql ="INSERT INTO patient (firstname, lastname, Email,password, phone, gender, location, dob) VALUES('$firstname','$lastname','$email','$a_password','$phone','$gender','$a_location','$dob')";

// mysqli_query($conn,$sql)

?>

