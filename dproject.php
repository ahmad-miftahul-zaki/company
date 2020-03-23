<?php
include "../koneksi.php";
$pnumber=$_GET['pnumber'];
$sql="delete from project where pnumber='$pnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:project.php');
}
?>
