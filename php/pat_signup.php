<?php
include_once('connection.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$a_password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$a_location= $_POST['location'];
$dob = $_POST['dob'];

if(mysqli_query($conn,"select email from patient where email='$email'")){
  echo "<script>alert('This Email Alredy Exists');</script>";
  echo "<script type='text/javascript'> window.location = '../signup.html'; </script>";
}

else{
$sql ="INSERT INTO patient(firstname, lastname, email, p_password, phone, gender, location, dob) VALUES('$firstname','$lastname','$email','$a_password','$phone','$gender','$a_location','$dob')";

$res = mysqli_query($conn,$sql);

if($res){
// result designs
echo '<nav class="navbar navbar-expand-md  navbar-dark bg-dark"> 

<div class="container">
  <a href="index.html" class="navbar-brand text-warning">&#9855
    HOSPITAL MANAGEMENT</a>

   <button class="navbar-toggler " type="button" data-toggle="collapse"
   data-target="#collapsenavbar">
   <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
     <ul class="navbar-nav ml-auto ">
       <li class="nav-item">
         <a href="../index.html" class="nav-link pr-5">HOME</a>
       </li>                  
       <li class="nav-item">
         <a href="../about.html" class="nav-link pr-5">ABOUT</a>
                      
        <li class="nav-item ">
         <a href="../login.html" class="nav-link pr-5">LOGIN</a>
       </li>
     </ul>
   </div>
</div>
</nav>
</div>';

echo "<body style='
         min-height: 100vh;
         background: url(https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) center;
         background-size: cover;
         text-align: center;';>

         <link
         rel='stylesheet'
         href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'
         />
         </body>";

echo"<h2 style='color: green;
               text-align:center; 
               font-size:50px;  
               margin:2rem;';>SIGN UP SUCCESSFUL</h2>";
echo"<h3  style='color: red; 
               text-align:center; 
               font-size:30px;  
               margin:2rem;';>Return to LOGIN PAGE</h3>";
echo"<a href='../login.html'>
               <button onclick=login.html'; style='background: blue; font-size:30px;
               color:white;  
               margin:2rem 45%;';>Login Page</button>
      </a>";

      mysqli_close($conn);
}

else{
  echo "ERROR";
}


}
?>