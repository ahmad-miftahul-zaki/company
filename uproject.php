<?php
include "../koneksi.php";
$pname=$_POST['pname'];
$pnumber=$_POST['pnumber'];
$dnum=$_POST['dnum'];
$plocation=$_POST['plocation'];
$sql="update project set pname='$pname',dnum='$dnum',plocation='$plocation' where pnumber='$pnumber'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:project.php');
}
?>