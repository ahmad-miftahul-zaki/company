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
  <title>Home</title>
  <style>
body { 
  background: url(images/437407.jpg) no-repeat center fixed;  
}
</style>
	<link rel="shortcut icon" href="images/z.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/sty.css" rel="stylesheet">	
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/tab.css">
	<link rel="stylesheet" href="css/blink.css">
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
	<li role="presentation" class="active"><a href="home.php">Home</a></li>
	<li role="presentation"><a href="department.php">Department</a></li>
	<li role="presentation"><a href="departmentlocation.php">Department Location</a></li>
	<li role="presentation"><a href="employee.php">Employee</a></li>
	<li role="presentation"><a href="dependent.php">Dependent</a></li>						
	<li role="presentation"><a href="project.php">Project</a></li>
	<li role="presentation"><a href="manager.php">Manager</a></li>						
	<li role="presentation"><a href="works_on.php">Works On</a></li>
    <li><a href='logout.php'>Log Out</a> </li>
      </ul>
   </li>
</ul>			
</nav>
</div>
</header>
<div class="content">
<center>
<h1 class="tab blink"><span>Welcome To Company</span></h1>
</div>
</center>

<!--start footer-->
<footer>
<div class="sub-footer">
<div class="container">
<div class="footer">
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
</div>
</footer>
<!--end footer-->
</div>
</body>
</html>
