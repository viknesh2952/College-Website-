<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<link rel="stylesheet" type="text/css" href="dloadbooks.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<style>
		.dropbtn {
  background-color: none;
  color: black;
  
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
	</style>
</head>
<body >
	<h1>Civil Engineering</h1>
	<div class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="department.php">Department</a></li>
		<li><a href="bookshop.php">Books</a></li>
		<li><a href="facilities.php">Facilities</a></li>
		<li><a href="about.php">About</a></li>
		<li><div class="dropdown">
			<button class="dropbtn"><?php echo $_SESSION ['s_username']?></button>
			<div class="dropdown-content">
			<a href="demo.php">Logout</a></li>
	</ul>	
    </div> 
    <form class="google" target="_blank" action="http://www.google.com/search" method="GET">
  		<input type="text" name="q">
  		<i class="fa fa-search"></i>
	</form>
	<br><br>
	<form>
	<a href="syllabus/syllabuscivil.pdf" download><input class="MyButton" type="button" value="B.E CIVIL Syllabus"></a>	
	<a href="https://drive.google.com/file/d/14wUVS0Rd5gWtD9R-Suw8prgM1PeegypU/view?usp=drivesdk"><input class="MyButton" type="button" value="Python Programming"></a>
	<a href="https://drive.google.com/file/d/1x-IcAPzENryQriPD5CX5EfObc8eiLG-N/view?usp=drivesdk"><input class="MyButton" type="button" value="Environmental science"></a>
	<a href="https://drive.google.com/file/d/1tDUMiKfMm25DQUTMaK2hsXdYMm7hGsJf/view?usp=drivesdk"><input class="MyButton" type="button" value="Engineering Graphics"></a>
	<a href="https://drive.google.com/file/d/1cfJrEeIdlY0ItMy_cgebDv7PUJxmJFz-/view?usp=drivesdk"><input class="MyButton" type="button" value="Engineering Physics-1"></a>
	<a href="https://drive.google.com/file/d/1bIEB18_GrwDY3DCxWSxeOpl7_UKACb7o/view?usp=drivesdk"><input class="MyButton" type="button" value="Engineering Architecture"></a>
	<a href="https://drive.google.com/file/d/1U8FgkPzj872nNlJSfYNJNhtUmgOLwylL/view?usp=drivesdk"><input class="MyButton" type="button" value="Flow Open Channel"></a>
	<a href="https://drive.google.com/file/d/1-c5UaHafg9R9s0flJW1LGbJD6b69Yj-7/view?usp=drivesdk"><input class="MyButton" type="button" value="Soil Mechanics"></a>
	<a href="https://drive.google.com/file/d/1-ccwhrnlxLfDgCS--M_MG2I7KoC09ULX/view?usp=drivesdk"><input class="MyButton" type="button" value="Irrigation Engineering"></a>
	</form>
<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Dr.<span>Sacoe</span></h3>
 
		<p class="footer-links">
		<a href="index.php">Home | </a>
		<a href="department.php">Department | </a>
		<a href="bookshop.php">Books | </a>
		<a href="facilities.php">Facilities | </a>
		<a href="about.php">About</a>
		</p>
 
		<p class="footer-company-name">Dr.Sacoe &copy;.org</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Dr.Sivanthi Aditanar College of Engineering</span> Ranimaharajapuram, Tiruchendur-628215</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+91 04639 242 482</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:drsacoe@aei.edu.in">drsacoe@aei.edu.in</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About our college</span>
         It was established in 1995 with the principal objective of bringing quality education within the reach of the weaker sections, particularly in rural areas.</p>
 
		<div class="footer-icons">
 
		<a href="https://www.facebook.com/drsacoe4954" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://twitter.com/drsacoe" target="_blank"><i class="fab fa-twitter"></i></a>
		<a href="https://www.youtube.com/channel/UCxYNhksj18h6yoKLimwArJQ/?reload=9" target="_blank"><i class="fab fa-youtube"></i></a>
		<a href="https://www.instagram.com/drsacoe/" target="_blank"><i class="fab fa-instagram"></i></a>
 
		</div>
 
		</div>
 
		</footer>
</body>
