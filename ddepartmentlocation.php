<?php
include "koneksi.php";
$dnumber=$_GET['dnumber'];
$sql="delete from dept_location where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:departmentlocation.php');
}
?>