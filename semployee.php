<?php
include "../koneksi.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$minit=$_POST['minit'];
$ssn=$_POST['ssn'];
$cdate=$_POST['cdate'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$salary=$_POST['salary'];
$superssn=$_POST['superssn'];
$dno=$_POST['dno'];
$sql="insert into employee values('$fname','$lname','$minit','$ssn','$cdate','$address','$sex','$salary','$superssn','$dno')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:employee.php');
}
?>