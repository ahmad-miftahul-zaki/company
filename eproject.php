<?php
include "../koneksi.php";
$pnumber=$_GET['pnumber'];
$sql="select * from project where pnumber='$pnumber'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Project</title>
 </head>
 <body>
  <form method="post" action="uproject.php">
	<table>
	<tr>
		<td>PName</td>
		<td>:</td>
		<td><input type="text" name="pname" value='<?php echo $data[0] ?>'></td>
	</tr>
	<tr>
		<td>PNumber</td>
		<td>:</td>
		<td><input type="text" name="pnumber" value='<?php echo $data[1] ?>' readonly></td>
	</tr>
	<tr>
		<td>DNum</td>
		<td>:</td>
		<td><input type="text" name="dnum" value='<?php echo $data[2] ?>'></td>
	</tr>
	<tr>
		<td>Plocation</td>
		<td>:</td>
		<td><input type="text" name="plocation" value='<?php echo $data[3] ?>'></td>
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