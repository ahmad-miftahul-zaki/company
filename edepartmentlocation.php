<?php
include "../koneksi.php";
$dnumber=$_GET['dnumber'];
$sql="select * from dept_location where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Department Location</title>
 </head>
 <body>
  <form method="post" action="udepartmentlocation.php">
	<table>
	<tr>
		<td>Department Number</td>
		<td>:</td>
		<td><input type="text" name="dnumber" value='<?php echo $data[0] ?>' readonly></td>
	</tr>
	<tr>
		<td>Department Location</td>
		<td>:</td>
		<td><input type="text" name="dlocation" value='<?php echo $data[1] ?>'></td>
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