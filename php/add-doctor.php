<?php
session_start();
include('connection.php');
include('include/admin-checklogin.php');
check_login();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $_SESSION['afname']; ?>| Add Doctor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


		</head>
		<body>
			<div id="app">		
			<?php include('include/nav.php');?>
		<?php include('include/admin-sidebar.php');?>
		<div class="app-content">


		<!-- end: TOP NAVBAR -->
		<div class="main-content" >
		<div class="wrap-content container" id="container">
		<!-- start: PAGE TITLE -->
		<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle"><?php echo $_SESSION['afname']; ?>| Add Doctor</h1>
												</div>
			<ol class="breadcrumb">
				<li>
					<span><?php echo $_SESSION['afname']; ?></span>
				</li>
				<li class="active">
					<span>Add Doctor</span>
				</li>
			</ol>
		</div>
		</section>
		<!-- end: PAGE TITLE -->
		<!-- start: BASIC EXAMPLE -->
		<div class="container-fluid container-full bg-white">
		<div class="row">
			<div class="col-md-12">
				
				<div class="row margin-top-30">
					<div class="col-lg-12 col-md-12">
						<div class="panel panel-white">
							<div class="panel-heading">
								<h5 class="panel-title">Add Doctor</h5>
							</div>
							<div class="panel-body text-left">
				
								<form role="form" name="adddoc" method="post" onSubmit="return valid();">
									<div class="form-group">
										<label for="DoctorSpecialization">
											Doctor Specialization
										</label>
											<input type="text" required name="Doctorspecialization"
											class="form-control"
											placeholder="Doctorspecialization">
										</div>

<div class="form-group">
								<label for="doctorname">
										First Name
								</label>
<input type="text" name="docname" class="form-control" required  placeholder="Enter Doctor Name">
							</div>
						

<div class="form-group">
								<label for="doctorname">
										Last Name
								</label>
<input type="text" name="lname" class="form-control" required placeholder="Enter Doctor Name">
							</div>


		<div class="form-group">
										<label for="address">
												Doctor Clinic Address
										</label>
		<textarea name="clinicaddress" class="form-control" required placeholder="Enter Doctor Clinic Address"></textarea>
									</div>
		<div class="form-group">
										<label for="fess">
												Doctor Consultancy Fees
										</label>
		<input type="number" name="docfees" class="form-control" required placeholder="Enter Doctor Consultancy Fees">
									</div>

		<div class="form-group">
				<label for="fess">
												Doctor Contact no
										</label>
		<input type="number" name="doccontact" class="form-control" required placeholder="Enter Doctor Contact no">
									</div>

		<div class="form-group">
				<label for="fess">
												Doctor Email
										</label>
		<input type="email" name="docemail" class="form-control"required  placeholder="Enter Doctor Email id">
									</div>



									
									<div class="form-group">
										<label for="exampleInputPassword1">
												Password
										</label>
		<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
									</div>
									
		<div class="form-group">
										<label for="exampleInputPassword2">
											Confirm Password
										</label>
				<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
									</div>

									</div>

				<div class="form-group">
                <label for="gender">Gender:</label>
              </br> 
                <input
                  name="gender" 
                  type="radio"
                  value="male"
                  />MALE </br> 
                  <input
                  name="gender" 
                  type="radio"
                  value="female"
                  />FEMALE </br> 
                  <input
                  name="gender"
                  type="radio"
				  value="other"
				  default
                  />OTHER
              </div>

		

		<div class="form-group">
										<label for="doctorname">
												DOB
										</label>
		<input type="date" name="dob" required class="form-control" >
									</div>

		<button type="submit" name="submit" class="btn btn-o btn-primary">
										Submit
									</button>
								</form>
							</div>
						</div>
					</div>
						
						</div>
					</div>
				<div class="col-lg-12 col-md-12">
						<div class="panel panel-white">
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		

		</div>
		</div>
		</div>
		<!-- start: FOOTER -->
		<?php include('include/footer.php');?>
		<!-- end: FOOTER -->
		>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

		<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>


	</body>
</html>


<?php
if(isset($_POST['submit']))
{
$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$lname=$_POST['lname'];
$docaddress=$_POST['clinicaddress'];
$docfees=$_POST['docfees'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$password=$_POST['npass'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$ret= mysqli_query($conn,"select email from doctor where email='$docemail'");
$res=mysqli_fetch_assoc($ret);
if($res){
  echo "<script>alert('This Email Alredy Exists');</script>";
  echo "<script type='text/javascript'> window.location = 'add-doctor.php'; </script>";
}

else{
$sql=mysqli_query($conn,"insert into doctor(d_role,firstname,lastname,address,d_fee,phone,email,d_password,gender,dob) values('$docspecialization','$docname','$lname','$docaddress','$docfees','$doccontactno','$docemail','$password','$gender','$dob')");

if($sql)
{
echo "<script>alert('Doctor info added Successfully');</script>";
echo "<script type='text/javascript'> window.location = 'manage-doctors.php'; </script>";

}
}
}
?>