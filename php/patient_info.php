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
$p_password = $_POST['password'];

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




$sql = "SELECT p_id, firstname, email, p_password FROM patient WHERE email='$email'";

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
      if($p_password== $row['p_password'] && $email== $row['email']){
      session_start();
      $_SESSION['email']= $row['email'];
      $_SESSION['fname']= $row['firstname'];
      $_SESSION['pid']= $row['p_id'];
      include("pat-dashboard.php");
      }
      else{
      header("Location:../signup.html");
      }
     
   }
   // mysqli_stmt_close($stmt);
   mysqli_close($conn);

}
?>
