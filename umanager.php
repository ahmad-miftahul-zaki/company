<?php
include "koneksi.php";
$dnumber=$_POST['dnumber'];
$mgrssn=$_POST['mgrssn'];
$mgrstartdate=$_POST['mgrstartdate'];
$sql="update manager set mgrssn='$mgrssn',mgrstartdate='$mgrstartdate' where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:manager.php');
}
?>