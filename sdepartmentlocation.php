<?php
include "../koneksi.php";
$dnumber=$_POST['dnumber'];
$dlocation=$_POST['dlocation'];
$sql="insert into dept_location values('$dnumber','$dlocation')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:departmentlocation.php');
}
?>