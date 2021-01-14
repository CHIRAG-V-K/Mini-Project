<?php
session_start();
include('connection.php');
include('include/doc-checklogin.php');
check_login();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $_SESSION['dfname'];?>  | Write Prescription</title>
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
		<?php	include('include/nav.php');?>
			<?php include('include/sidebar.php');?>
			<div class="app-content">

	
<!-- end: TOP NAVBAR -->
<div class="main-content" >
	<div class="wrap-content container" id="container">
		<!-- start: PAGE TITLE -->
		<section id="page-title">
			<div class="row">
				<div class="col-sm-8">
					<h1 class="mainTitle"><?php echo $_SESSION['dfname'];?> |  Write Prescription</h1>
						</div>
				<ol class="breadcrumb">
					<li>
						<span><?php echo $_SESSION['dfname'];?></span>
					</li>
					<li class="active">
						<span> Write Prescription</span>
					</li>
				</ol>
		</section>
		<!-- end: PAGE TITLE -->
		<!-- start: BASIC EXAMPLE -->
		<div class="container-fluid container-fullw bg-white text-center">
			<div class="row">
				<div class="col-md-12 >
					
					<div class= "row margin-top-30">
						<div class="col-lg-12 col-md-12">
							<div class="panel panel-white">
								<div class="panel-heading">
									<h5 class="panel-title"> Write Prescription</h5>
								</div>
								<div class="panel-body">
			
		
		
<form role="form" name="prescription" method="post" >

<div class="form-group">
	
	<label for="patientid">
									Enter Patient ID
									</label>
			<input class="form-control" name="patient-id"  type="number" required="required" placeholder="ID Number">
			</div>
<!--  -->

	<div class="form-group">
	
	<label for="medname">
									Medicines Names
									</label>
			<input class="form-control" name="med-name"  type="text" required="required" placeholder="Medicine name">
			</div>
<!--  -->
	<div class="form-group">
	
	<label for="patientid">Count Of Medicines
									</label>
			<input class="form-control" name="count"  type="text" required="required" placeholder="Count">
			</div>
						
<!--  -->
							<div class="form-group">
											
			<label for="dose">
												 Medicines Dose
											</label>
					<input class="form-control" name="dose"  type="text" required="required" placeholder="Dose">
					</div>
<!--  -->
								
								<div class="form-group">
														<label for="message">	
														Message
														</label>
									<textarea class="form-control" name="message"     placeholder="Description"   ></textarea>
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
</div>

</div>
</div>

<!-- end: BASIC EXAMPLE -->




						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- end: SETTINGS -->
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	

	</body>
</html>


<?php

if(isset($_POST['submit']))
{


$p_id=$_POST['patient-id'];
$med_name=$_POST['med-name'];
$count=$_POST['count'];
$dose=$_POST['dose'];
$message=$_POST['message'];
$d_id=$_SESSION['did'];


	$query=mysqli_query($conn,"insert into prescription(med_name, med_count, med_dose,  message, d_id, p_id) values('$med_name','$count','$dose','$message','$d_id','$p_id')");
	if($query)
	{
		echo "<script>alert('Prescription successfully submitted');</script>";
		echo "<script type='text/javascript'> window.location = 'give-prescription.php'; </script>";
	}

}
?>