<?php
include "../koneksi.php";
$essn=$_GET['essn'];
$sql="select * from dependent where essn='$essn'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Dependent</title>
 </head>
 <body>
  <form method="post" action="udependent.php">
	<table>
	<tr>
		<td>E SSN</td>
		<td>:</td>
		<td><input type="text" name="essn" value='<?php echo $data[0] ?>' readonly></td>
	</tr>
	<tr>
		<td>Sex</td>
		<td>:</td>
		<td>
		<input type="radio" name="sex" value="L"<?php echo $data[1] ?>>Laki-Laki
		<input type="radio" name="sex" value="P"<?php echo $data[1] ?>>Perempuan 
		</td>
	</tr>
	<tr>
		<td>Dependent Name</td>
		<td>:</td>
		<td><input type="text" name="dependent_name" value='<?php echo $data[2] ?>'></td>
	</tr>
	<tr>
		<td>B Date</td>
		<td>:</td>
		<td><input type="date" name="bdate" value='<?php echo $data[3] ?>'></td>
	</tr><tr>
		<td>Relationship</td>
		<td>:</td>
		<td><input type="text" name="relationship" value='<?php echo $data[4] ?>'></td>
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