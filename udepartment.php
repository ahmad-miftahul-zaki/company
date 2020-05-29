<?php
include "koneksi.php";
$dname=$_POST['dname'];
$dnumber=$_POST['dnumber'];
$sql="update department set dname='$dname' where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:department.php');
}
?>