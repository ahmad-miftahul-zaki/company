<?php
include "koneksi.php";
$dname=$_POST['dname'];
$dnumber=$_POST['dnumber'];
$sql="insert into department values('$dname','$dnumber')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:department.php');
}
?>