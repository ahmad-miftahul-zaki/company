<?php
include "koneksi.php";
$essn=$_POST['essn'];
$pno=$_POST['pno'];
$hours=$_POST['hours'];
$sql="update works_on set pno='$pno',hours='$hours' where essn='$essn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:works_on.php');
}
?>