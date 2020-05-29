<?php
include "koneksi.php";
$dnumber=$_POST['dnumber'];
$dlocation=$_POST['dlocation'];
$sql="update dept_location set dlocation='$dlocation' where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:departmentlocation.php');
}
?>