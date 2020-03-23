<?php session_start();
unset($_SESSION['username']);
sesSion_destroy();
header('location:index.html');
?>