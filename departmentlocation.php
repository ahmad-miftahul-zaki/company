<?php
SESSION_start();
if(!isset($_SESSION['username'])){
echo '<script language = "javascript"> alert("anda harus login");
document.location="index.html";</script>';
}
?>
<!doctype html>
<html lang="en">
 <head>
   <title>Department Location</title>
    <link rel="shortcut icon" href="../images/z.png">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link href="../css/sty.css" rel="stylesheet">	
	<link rel="stylesheet" href="../css/tab.css">
	<link rel="stylesheet" href="../css/blink.css">
	<link rel="stylesheet" href="../css/button.css"> 
	<style>
body { 
  background: url(../images/437407.jpg) no-repeat center fixed;  
}
</style>
 </head>
<body>
<header>
	<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	<div class="navbar-header">
	<div class="navbar-brand">
	<a><h1>COMPANY</h1></a>
</div>
</div>
<div class="menu">
	<ul class="nav nav-tabs" role="tablist">
	<li role="presentation"><a href="home.php">Home</a></li>
	<li role="presentation"><a href="department.php">Department</a></li>
	<li role="presentation" class="active"><a href="departmentlocation.php">Department Location</a></li>
	<li role="presentation"><a href="employee.php">Employee</a></li>
	<li role="presentation"><a href="dependent.php">Dependent</a></li>						
	<li role="presentation"><a href="project.php">Project</a></li>
	<li role="presentation"><a href="manager.php">Manager</a></li>						
	<li role="presentation"><a href="works_on.php">Works On</a></li>	
	<li><a href='logout.php'>Log Out</a> </li>
      </ul>
   </li>
</ul>
</div>
</div>			
</nav>
</div>
</div>
</header>
<div class="content">
<form method="post" action="sdepartmentlocation.php">
<center>
	<table>
	<tr>
		<td width="160px">Department Number</td>
		<td width="80px">:</td>
		<td><input type="text" name="dnumber"></td>
	</tr>
	<tr>
		<td width="160px">Department Location</td>
		<td width="80px">:</td>
		<td><input type="text" name="dlocation"></td>
	</tr>
	<tr>
		<td width="160px"></td>
		<td width="80px"></td>
		<td><button class="button" type="submit" style="vertical-align:middle"><span>Save </span></button></td>
	</tr>
	</table>
	  <table>
  <tr>
	<th width="200px">Department Number</th>
	<th width="200px">Department Location</th>
	<th width="100px">Action</th>
  </tr>
  <?php
  include "../koneksi.php";
  $sql="select * from dept_location";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo "<tr>";
	echo "<td>$data[0]</td>";
	echo "<td>$data[1]</td>";
	echo "<td><a href=edepartmentlocation.php?dnumber=$data[0]>Edit</a> | <a href=ddepartmentlocation.php?dnumber=$data[0]>Delete</a></td>";
  echo "</tr>";
  }
  ?>
<div class="column side">
    <h2></h2>
</div>
  </table>
</form>
</div>
</form>
</div>
</center>
<!--start footer-->
<footer>
<div class="sub-footer">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ul class="social-network">
<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
</ul>
</div>
	<div class="col-lg-12">
	<div class="copyright">
<p>Ahmad Miftahul Zaki CE-3C | Copyright &copy; 2017</p>
</div>
</div>
</div>
</div>
</div>
</footer>
<!--end footer-->
</div>
</body>
</html>
