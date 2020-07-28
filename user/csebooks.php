<!DOCTYPE html>
<html>
<?php
session_start();
?>
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
	<h1>Computer Science And Engineering</h1>
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
	<a href="syllabus/syllabuscse.pdf" download><input class="MyButton" type="button" value="B.E CSE Syllabus"></a>
	<a href="https://drive.google.com/file/d/14wUVS0Rd5gWtD9R-Suw8prgM1PeegypU/view?usp=drivesdk"><input class="MyButton" type="button" value="Python Programming"></a>
	<a href="https://drive.google.com/file/d/1x-IcAPzENryQriPD5CX5EfObc8eiLG-N/view?usp=drivesdk"><input class="MyButton" type="button" value="Environmental science"></a>
	<a href="https://drive.google.com/file/d/1tDUMiKfMm25DQUTMaK2hsXdYMm7hGsJf/view?usp=drivesdk"><input class="MyButton" type="button" value="Engineering Graphics"></a>
	<a href="https://drive.google.com/file/d/1cfJrEeIdlY0ItMy_cgebDv7PUJxmJFz-/view?usp=drivesdk"><input class="MyButton" type="button" value="Engineering Physics-1"></a>
	<a href="https://drive.google.com/file/d/1jmb3jLTdKirERWkKSJNRo6lR0ktP-QVD/view?usp=drivesdk"><input class="MyButton" type="button" value="Programming in C"></a>
	<a href="https://drive.google.com/file/d/1QbNQyGqQULQjkma6VrZsLQSFUW6Jb_ST/view?usp=drivesdk
"><input class="MyButton" type="button" value="Object Oriented Programming"></a>
	<a href="
https://drive.google.com/file/d/1kYeckzB9gI2jTuJtTmI4IWw1guZ9eVWI/view?usp=drivesdk
"><input class="MyButton" type="button" value="Engineering Physics-2"></a>
	<a href="https://drive.google.com/file/d/1b1ryK12nh3cOhH_HQEMdTs_kS13p8aCg/view?usp=drivesdk"><input class="MyButton" type="button" value="Operating Systems"></a>
	<a href="https://drive.google.com/file/d/1MY5C2zEvXxhEaglwY5-Rkpgyn98jmlfN/view?usp=drivesdk"><input class="MyButton" type="button" value="Design and Analysis of Algorithms"></a>
	<a href="https://drive.google.com/file/d/13KBJcb4JeKxN2Dso24bub-9pHpZy9aPf/view?usp=drivesdk"><input class="MyButton" type="button" value="Database Management System"></a>
	<a href="https://drive.google.com/file/d/1j36A-xfQQgUT102LJLZNifx3iV5uHhvR/view?usp=drivesdk"><input class="MyButton" type="button" value="Theory Of Computation"></a>
	<a href="https://drive.google.com/file/d/1W_UxDUNzQdFmOqTpquWHGlkz_2-PDj0n/view?usp=drivesdk"><input class="MyButton" type="button" value="Computer Networks"></a>
	<a href="https://drive.google.com/file/d/1Y3zG_7IOgz-saSzBqs428iEHV5pxxp50/view?usp=drivesdk"><input class="MyButton" type="button" value="Object Oriented Analysis & Design "></a>
	<a href="https://drive.google.com/file/d/1dG6ffc-m7x2_ZCLIjXljV796PdDgNaIF/view?usp=drivesdk"><input class="MyButton" type="button" value="Artificial Intelligence"></a>
	<a href="https://drive.google.com/file/d/1h6Vydw3CimviKI_Yy_1XgDD-sJ8YnGRG/view?usp=drivesdk"><input class="MyButton" type="button" value="Compiler Design"></a>
	<a href="https://drive.google.com/file/d/1jmb3jLTdKirERWkKSJNRo6lR0ktP-QVD/view?usp=drivesdk"><input class="MyButton" type="button" value="Computer Organization"></a>
	<a href="https://drive.google.com/file/d/1CrkTLl4htVAXhR_u64bPhAlpFYRpbZFW/view?usp=drivesdk"><input class="MyButton" type="button" value="Cryptographics"></a>
	<a href="https://drive.google.com/file/d/1eCk7ZOd2-aAVHmaeMWR_Ua1rusH6_PZ6/view?usp=drivesdk"><input class="MyButton" type="button" value="Datamining"></a>
	<a href="https://drive.google.com/file/d/1yLNcCikRh-EZhjC5hn-owOzHsg_tbVyV/view?usp=drivesdk"><input class="MyButton" type="button" value="Cloud Computing"></a>
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
