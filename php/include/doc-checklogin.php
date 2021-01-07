<?php
function check_login()
{
if(strlen($_SESSION['demail'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="login.html";		
		$_SESSION["demail"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>