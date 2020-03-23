<?php
include "../koneksi.php";
$dnumber=$_GET['dnumber'];
$sql="select * from department where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Department</title>
 </head>
 <body>
  <form method="post" action="udepartment.php">
	<table>
	<tr>
		<td>Deartment Name</td>
		<td>:</td>
		<td><input type="text" name="dname" value='<?php echo $data[0] ?>'></td>
	</tr>
	<tr>
		<td>Department Number</td>
		<td>:</td>
		<td><input type="text" name="dnumber" value='<?php echo $data[1] ?>' readonly></td>
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