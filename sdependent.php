<?php
include "koneksi.php";
$essn=$_POST['essn'];
$dependent_name=$_POST['dependent_name'];
$sex=$_POST['sex'];
$bdate=$_POST['bdate'];
$relationship=$_POST['relationship'];
$sql="insert into dependent values('$essn','$dependent_name','$sex','$bdate','$relationship')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:dependent.php');
}
?>