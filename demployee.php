<?php
include "koneksi.php";
$ssn=$_GET['ssn'];
$sql="delete from employee where ssn='$ssn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:employee.php');
}
?>
