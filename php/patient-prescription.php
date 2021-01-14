<?php
session_start();
include('connection.php');
include('include/checklogin.php');
check_login();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $_SESSION['fname'];  ?> | Prescriptions</title>
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
<?php include('include/sidebar.php');?>
          <div class="app-content">
            <div class="main-content" >
     		       <div class="wrap-content container" id="container">
            <!-- start: PAGE TITLE -->
            <section id="page-title">
            <div class="row">
            <div class="col-sm-8">
            <h1 class="mainTitle"><?php echo $_SESSION['fname'];  ?> | Prescriptions</h1>
                                </div>
            <ol class="breadcrumb">
            <li>
            <span><?php echo $_SESSION['fname']; ?>'s ID</span>
        </li>
        <li class="active">
            <span><?php echo $_SESSION['pid']; ?></span>
        </li>
            </ol>
            </div>
            </section>
            <!-- end: PAGE TITLE -->
            <!-- start: BASIC EXAMPLE -->
            <div class="container-fluid container-fullw bg-white">


        <div class="row">
        <div class="col-md-12">
        <h5 class="over-title margin-bottom-15">
        <span class="text-bold">Your Prescriptions</span></h5>
        <!-- <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
        <?php echo htmlentities($_SESSION['msg']="");?>
        </p>	 -->
        <table class="table table-hover" id="sample-table-1">
            <thead>
                <tr>
                    <th class="center">#</th>
                    <th>Creation Date </th>
                    <th>Doctor</th>
                    <th>Medicine Name</th>
                    <th>Count</th>
                    <th>Dose </th>
                    <th>Message </th>
                    <th>Print </th>
                </tr>
            </thead>
            <tbody>
        <?php
        $sql=mysqli_query($conn,"select doctor.firstname as dfname, doctor.lastname as dlname, prescription.* from prescription join doctor on prescription.d_id = doctor.d_id
        where p_id='".$_SESSION['pid']."' order by prescription.date");
        $cnt=1;
        while($row=mysqli_fetch_assoc($sql))
        {
        ?>

                <tr>
                    <td class="center"><?php echo $cnt;?>.</td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['dfname'];?><br><?php echo $row['dlname'];?></td>
                    <td><?php echo $row['med_name'];?></td>
                    <td><?php echo $row['med_count'];?></td>
                    <td><?php echo $row['med_dose'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <td><a href="#">PRINT</a></td>
                    </tr>
                <?php 
        $cnt=$cnt+1;
                    }?>
                
                
            </tbody>
        </table>
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
	</body>
</html>

