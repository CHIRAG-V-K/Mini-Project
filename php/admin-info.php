<?php
$servername = "localhost";
$username = "login";
$password = "user";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
   echo "Connection Failed".mysqli_connect_error();
}
mysqli_select_db($conn,'hospital_management');

$email = $_POST['email'];
$a_password = $_POST['password'];




$sql = "select ad_id, firstname, email, ad_password from admin WHERE email='$email'";

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
      if($a_password == $row['ad_password'] && $email == $row['email']){
      session_start();
      $_SESSION['email']= $row['email'];
      $_SESSION['afname']= $row['firstname'];
      $_SESSION['aid']= $row['ad_id'];
      
      include("admin-dashboard.php");
      }
      else{
      echo "GO AWAY YOU ARE NOT MY ADMIN";
      
      }
     
   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);

}
?>