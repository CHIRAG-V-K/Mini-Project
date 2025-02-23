<?php
session_start();
//error_reporting(0);
include('connection.php');
include('include/doc-checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $_SESSION['dfname'];  ?> | Appointment History</title>
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
<?php include('doc-sidebar.php');?>
			<div class="app-content">


    <!-- end: TOP NAVBAR -->
    <div class="main-content" >
    <div class="wrap-content container" id="container">
    <!-- start: PAGE TITLE -->
    <section id="page-title">
    <div class="row">
    <div class="col-sm-8">
    <h1 class="mainTitle">Doctor <?php echo $_SESSION['dfname'];  ?> | Appointment History</h1>
                        </div>
    <ol class="breadcrumb">
    <li>
    <span><?php echo $_SESSION['dfname'];  ?> </span>
    </li>
    <li class="active">
    <span>Appointment History</span>
    </li>
    </ol>
    </div>
    </section>
    <!-- end: PAGE TITLE -->
    <!-- start: BASIC EXAMPLE -->
    <div class="container-fluid container-fullw bg-white">


    <div class="row">
    <div class="col-md-12">
  
    <table class="table table-hover" id="sample-table-1">
    <thead>
    <tr>
    <th class="center">#</th>
    <th class="hidden-xs">Patient  Name</th>
    <th>Specialization</th>
    <th>Consultancy Fee</th>
    <th>Appointment Date / Time </th>
    <th>Message</th>
    <th>Appointment Creation Date  </th>
    <th>Current Status</th>
    <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <?php
    $sql=mysqli_query($conn,"select patient.firstname as fname,appointment.*  from appointment join patient on patient.p_id=appointment.p_id where appointment.d_id='".$_SESSION['did']."'");
    $cnt=1;
    while($row=mysqli_fetch_assoc($sql))
    {
    ?>

    <tr>
    <td class="center"><?php echo $cnt;?>.</td>
    <td class="hidden-xs"><?php echo $row['fname'];?></td>
    <td><?php echo $row['d_role'];?></td>
    <td><?php echo $row['d_fee'];?></td>
    <td><?php echo $row['ap_date'];?> / <?php echo
        $row['ap_time'];?>
    </td>
    
    <td><?php echo $row['message'];?></td>
    <td><?php echo $row['date'];?></td>
    <td>
    <?php if(($row['patientstatus']==1) && ($row['doctorstatus']==1))  
    {
    echo "Active";
    }
    if(($row['patientstatus']==0) && ($row['doctorstatus']==1))  
    {
    echo "Cancle by Patient";
    }

    if(($row['patientstatus']==1) && ($row['doctorstatus']==0))  
    {
    echo "Cancel by you";
    }
  
    if(($row['patientstatus']==0) && ($row['doctorstatus']==0))  
    {
    echo "Cancel by Management";
    }



    ?></td>
    <td >
    <div class="visible-md visible-lg hidden-sm hidden-xs">
    <?php if(($row['patientstatus']==1) && ($row['doctorstatus']==1))  
    { ?>

        
    <a href="doc-appointments.php?id=<?php echo $row['p_id']?>&cancel=update&time=<?php echo $row['ap_time']?>" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancle</a>
    <?php } else {

    echo "Cancled";
    } ?>
    </div>
    <div class="visible-xs visible-sm hidden-md hidden-lg">
        <div class="btn-group" dropdown is-open="status.isopen">
            <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
                <i class="fa fa-cog"></i>&nbsp;<span class="caret">
                </span>
            </button>
        </div>
    </div></td>
    </tr>

    <?php 
    $cnt=$cnt+1;
    }?>


    </tbody>
    </table>
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


<?php
if(isset($_GET['cancel']))
{
mysqli_query($conn,"update appointment set doctorstatus='0' where p_id ='".$_GET['id']."'
and ap_time ='".$_GET['time']."'");
echo "<script>alert('appointment canceled Successfully');</script>";
echo "<script type='text/javascript'> window.location = 'doc-appointments.php'; </script>";
}

?>