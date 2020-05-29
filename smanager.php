<?php
include "koneksi.php";
$dnumber=$_POST['dnumber'];
$mgrssn=$_POST['mgrssn'];
$mgrstartdate=$_POST['mgrstartdate'];
$sql="insert into manager values('$dnumber','$mgrssn','$mgrstartdate')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:manager.php');
}
?>