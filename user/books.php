
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<link rel="stylesheet" type="text/css" href="book.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="sample-registration-form-validation.js"></script>
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
<body onLoad="document.registration.userid.focus();">
	<h1>Counselling code-4954</h1>
	<div class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="department.php">Department</a></li>
		<li><a href="books.html">Books</a></li>
		<li><a href="facilities.php">Facilities</a></li>
        <li><a href="about.php">About</a></li>
        <li><div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION ['s_username']?></button>
  <div class="dropdown-content">
  <a href="demo.html">Logout</a>
	</ul>	
    </div> 
    <form class="google" target="_blank" action="http://www.google.com/search" method="GET">
  		<input type="text" name="q">
  		<i class="fa fa-search"></i>
	</form>
    <h3>!!You must login to download books</h3>
<p>SIGNUP here!!<br>Use tab keys to move from one input field to the next.</p>
<form name='registration' class="regform" onSubmit="return formValidation();" action="sample.php" method="post" >
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid" size="12"  required/></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" size="12" id="user-password" required/></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username" size="50" required/></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" size="50" required/></li>
<li><label for="country">Country:</label></li>
<li><select name="country" required>
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select></li>
<li><label for="zip">ZIP Code:</label></li>
<li><input type="text" name="zip" required /></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="50" required/></li>
<li><label for="desc">About:</label></li>
<li><textarea name="description" id="desc" required></textarea></li>
<li><input type="submit" class="submit" name="signup" value="Submit" /></li>
</ul>
</form>

<div class="login">
    <form action="action.php" >
	<h2>Login</h2>
    <p>Username</p>
	<input type="text" name="username" placeholder="enter ur username" required,autofocus>
	<br>
	<p>Password</p>
	<input type="password" name="password" placeholder="enter ur password" required,autofocus>
	<br><br><br>
	<input type="submit" class="button" name="register">
	</form>
</div>

<footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Dr.<span>Sacoe</span></h3>
 
		<p class="footer-links">
		<a href="index.php">Home | </a>
		<a href="department.html">Department | </a>
		<a href="books.html">Books | </a>
		<a href="facilities.html">Facilities | </a>
		<a href="about.html">About</a>
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
