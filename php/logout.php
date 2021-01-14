<?php
session_start();
include('connection.php');
unset($_SESSION['email']);
echo "<script>alert('Logged Out Successfully');</script>";
echo "<script type='text/javascript'> window.location = '../login.html'; </script>";
?>

