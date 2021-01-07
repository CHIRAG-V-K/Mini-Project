<?php
$servername = "localhost";
$username = "login";
$password = "user";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
   echo "Connection Failed".mysqli_connect_error();
}

mysqli_select_db($conn,'hospital_management');

// Email and password to auth.
$email = $_POST['email'];
$d_password = $_POST['password'];

// $sql = "SELECT * FROM patient WHERE email=";
// $result = mysqli_query($conn,$sql);

// $row = mysqli_fetch_assoc($result);


// echo "ID: ".$row["p_id"]."<br>"
//       ."FirastName: ".$row["firstname"]."<br>".
//       "LastName: ".$row["lastname"]."<br>".
//       "Email: ".$row["email"]."<br>".
//       "phone number: ".$row["phone"]."<br>".
//       "Gender: ".$row["gender"]."<br>".
//       "Address:".$row["location"]."<br>".
//       "DOB: ".$row["dob"]."<br>"
//       ."<br>";




$sql = "SELECT d_id, firstname, email, d_password FROM doctor WHERE email='$email'";

// Init connection for stmt
$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
   echo "Error";
}

else {
   //mysqli_stmt_bind_param($stmt, "ss", $email, $p_password);
   mysqli_stmt_execute($stmt);

   $result = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($result)) {
     
      // Password check and email check
      if($d_password== $row['d_password'] && $email== $row['email']){
      session_start();
      $_SESSION['demail']= $row['email'];
      $_SESSION['dfname']= $row['firstname'];
      $_SESSION['did']= $row['d_id'];
    //   include("doc-dashboard.php");
      }
      else{
      echo"YOU ARE NOT IN THIS HOSPITAL";
      }
     
   }
#connection closing are
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
?>
