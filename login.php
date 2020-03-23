<?php
include "../koneksi.php";
session_start();
$username = $_POST['user'];
$password = md5($_POST['pass']);
$sql="select * from user where user = '$username' and password = '$password'";
$query = mysqli_query($conn,$sql);
$rowcount = mysqli_num_rows($query);
if($rowcount == 1){
	$_SESSION['username'] = $username;
	header('location:home.php');
}else{
	echo'<script language = "javascript"> alert("user atau password salah"); 
	document.location="index.html";</script>';
}
?>