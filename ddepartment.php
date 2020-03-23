<?php
include "../koneksi.php";
$dnumber=$_GET['dnumber'];
$sql="delete from department where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:department.php');
}
?>
