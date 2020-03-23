<?php
$host="localhost";
$user="root";
$pass="";
$db="company";

$conn=mysqli_connect($host,$user,$pass);
if(!$conn){
	die('koneksi gagal !'.mysqli_error());
}
$database=mysqli_select_db($conn,$db);
if(!$database){
	die('database gagal di akses !'.mysqli_error());
}
?>