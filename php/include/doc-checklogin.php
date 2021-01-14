<?php
function check_login()
{
if(strlen($_SESSION['email'])==0)
	{	
		echo "<script>alert('Unauthorised Entry');</script>";
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="../login.html";		
		$_SESSION["email"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>