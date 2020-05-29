<?php
include "koneksi.php";
$ssn=$_GET['ssn'];
$sql="select * from employee where ssn='$ssn'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Employee</title>
 </head>
 <body>
  <form method="post" action="uemployee.php">
	<table>
	<tr>
		<td>First Name</td>
		<td>:</td>
		<td><input type="text" name="fname" value='<?php echo $data[0] ?>'></td>
	</tr>
	<tr>
		<td>Minit</td>
		<td>:</td>
		<td><input type="text" name="minit" value='<?php echo $data[1] ?>'></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td>:</td>
		<td><input type="text" name="lname" value='<?php echo $data[2] ?>'></td>
	</tr>
	<tr>
		<td>SSN</td>
		<td>:</td>
		<td><input type="text" name="ssn" value='<?php echo $data[3] ?>' readonly></td>
	</tr>
	<tr>
		<td>C Date</td>
		<td>:</td>
		<td><input type="date" name="cdate" value='<?php echo $data[4] ?>'></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:</td>
		<td><input type="text" name="address" value='<?php echo $data[5] ?>'></td>
	</tr>
	<tr>
		<td>Sex</td>
		<td>:</td>
		<td>
		<input type="radio" name="sex" value="L"<?php echo $data[6] ?>>Laki-Laki
		<input type="radio" name="sex" value="P"<?php echo $data[6] ?>>Perempuan 
		</td>
	</tr>
	<tr>
		<td>Salary</td>
		<td>:</td>
		<td><input type="text" name="salary" value='<?php echo $data[7] ?>'></td>
	</tr>
	<tr>
		<td>Super SSN</td>
		<td>:</td>
		<td><input type="text" name="superssn" value='<?php echo $data[8] ?>'></td>
	</tr>
	<tr>
		<td>DNO</td>
		<td>:</td>
		<td><input type="text" name="dno" value='<?php echo $data[9] ?>'></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="Update"></td>
	</tr>
	</table>
  </form>
 </body>
</html>