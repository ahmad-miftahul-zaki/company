<?php
include "koneksi.php";
$dnumber=$_GET['dnumber'];
$sql="select * from manager where dnumber='$dnumber'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Manager</title>
 </head>
 <body>
  <form method="post" action="umanager.php">
	<table>
	<tr>
		<td>dnumber</td>
		<td>:</td>
		<td><input type="text" name="dnumber" value='<?php echo $data[0] ?>' readonly></td>
	</tr>
	<tr>
		<td>mgrssn</td>
		<td>:</td>
		<td><input type="text" name="mgrssn" value='<?php echo $data[1] ?>'></td>
	</tr>
		<tr>
		<td>mgrstartdate</td>
		<td>:</td>
		<td><input type="date" name="mgrstartdate" value='<?php echo $data[2] ?>'></td>
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