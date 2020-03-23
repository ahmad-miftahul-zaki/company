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
$sql="update employee set fname='$fname',minit='$minit',lname='$lname',cdate='$cdate',address='$address',sex='$sex',salary='$salary',superssn='$superssn',dno='$dno' where ssn='$ssn'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:employee.php');
}
?>