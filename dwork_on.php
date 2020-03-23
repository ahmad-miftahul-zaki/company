<?php
include "../koneksi.php";
$essn=$_GET['essn'];
$sql="delete from works_on where essn='$essn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:works_on.php');
}
?>
