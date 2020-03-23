<?php
include "../koneksi.php";
$essn=$_GET['essn'];
$sql="select * from works_on where essn='$essn'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Works On</title>
 </head>
 <body>
  <form method="post" action="uwork_on.php">
	<table>
	<tr>
		<td>ESSN</td>
		<td>:</td>
		<td><input type="text" name="essn" value='<?php echo $data[0] ?>' readonly></td>
	</tr>
	<tr>
		<td>PNO</td>
	 	<td>:</td>
		<td><input type="text" name="pno" value='<?php echo $data[1] ?>'></td>
	</tr>
	<tr>
		<td>Hours</td>
		<td>:</td>
		<td><input type="text" name="hours" value='<?php echo $data[2] ?>'></td>
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