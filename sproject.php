<?php
include "koneksi.php";
$pname=$_POST['pname'];
$pnumber=$_POST['pnumber'];
$dnum=$_POST['dnum'];
$plocation=$_POST['plocation'];
$sql="insert into project values('$pname','$pnumber','$dnum','$plocation')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:project.php');
}
?>