<?php
include "koneksi.php";
$essn=$_POST['essn'];
$pno=$_POST['pno'];
$hours=$_POST['hours'];
$sql="insert into works_on values('$essn','$pno','$hours')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:works_on.php');
}
?>