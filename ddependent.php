<?php
include "../koneksi.php";
$essn=$_GET['essn'];
$sql="delete from dependent where essn='$essn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:dependent.php');
}
?>
