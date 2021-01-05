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

$sql = "SELECT * FROM  admin";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
   while($row =mysqli_fetch_assoc($result)){
      echo "ID:   ".$row["ad_id"]."<br>"
      ."FirastName: ".$row["firstname"]."<br>".
      "LastName:  ".$row["lastname"]."<br>".
      "Email :".$row["email"]."<br>".
      "phone number: ".$row["phone"]."<br>".
      "Gender:  ".$row["gender"]."<br>".
      "Address:   ".$row["address"]."<br>"
      ."<br>";
   }
}else{
   echo "0 results";
}


?>