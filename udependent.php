<?php
include "../koneksi.php";
$essn=$_POST['essn'];
$dependent_name=$_POST['dependent_name'];
$sex=$_POST['sex'];
$bdate=$_POST['bdate'];
$relationship=$_POST['relationship'];
$sql="update dependent set dependent_name='$dependent_name',sex='$sex',bdate='$bdate',relationship='$relationship' where essn='$essn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:dependent.php');
}
?>