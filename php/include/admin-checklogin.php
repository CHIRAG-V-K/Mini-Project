<?php
function check_login()
{
if(strlen($_SESSION['aemail'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="login.html";		
		$_SESSION["aemail"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>