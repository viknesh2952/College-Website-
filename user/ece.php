<?php
  session_start();
?>
<!DOCTYPE html>
<head>
	<title>ECE</title>
	<link rel="stylesheet" type="text/css" href="dept.css">
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
<body id="ece" >
	<h1>Counselling code-4954</h1>
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
  <a href="demo.php">Logout</a>
	</ul>	
    </div> 
    <form class="google" target="_blank" action="http://www.google.com/search" method="GET">
  		<input type="text" name="q">
  		<i class="fa fa-search"></i>
	</form>
	<br><br>
	<h2>Our Faculties</h2>
	<pre>
Dr. D. David Neels Ponkumar, ME, PhD, MISTE 			Associate Prof. & HOD i.c MBA (Edu.Mgmt)
Dr. A. Beno, ME, PhD, MISTE					Associate Prof
Dr. R. Manjith, ME, PhD, MISTE,MIEEE	        		Associate Prof
Dr.S. P. Valan Arasu, ME, PhD, MISTE				Associate Prof
Mr. A. Jeyapaul Murugan, ME, MISTE				Asst.Prof
Mrs. V. Monisha, ME, MISTE					Asst.Prof
Mrs. J. Thilagavathy, ME, (PhD), MISTE		     		Asst.Prof
Mr. S. Darwin, ME,(PhD), MISTE					Asst.Prof
Mr. J. Joshua Bapu, ME,(PhD), MISTE				Asst.Prof
Mr. V.D.M. Jabez Daniel, ME, (PhD), MISTE,MIEEE	    	    	Asst.Prof
Mr. S. Senthil Siva Manikandan, ME, MISTE	        	Asst.Prof
Mrs. S. Sulochana, ME, MISTE					Asst.Prof
Mrs. U. Lenin Marksia , ME, MISTE				Asst.Prof
Mrs. S. Beula, ME, MISTE					Asst.Prof
Mrs. C.K.Balasundari, ME, MISTE					Asst.Prof
Mr. U. Sivaraju, ME, MISTE					Asst.Prof
Mr. K. Murugan, ME, (PhD), MISTE				Asst.Prof
Mr. G. Sam Singh, M.Tech, MISTE					Asst.Prof
</pre>
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
<html>