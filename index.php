<?php 
include('config.php');
?>
<?php
$flag=0;

	if(isset($_POST['submit']))
	{
		$username=$_POST['user_name'];
		$email=$_POST['user_email'];
		$query=$_POST['user_query'];
		if(($username=="")||($email=="")||($query==""))
		{
			$flag=1;
		}
		
		$sql = "SELECT * FROM query";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   		 // output data of each row
    	while($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"]. " - Name: " . $row["query_user"]. "QUERY_EMAIL " . $row["query_email"]. "QUERY_DATE".$row["query_date"]."QUERY_CONTENT".$row['query_content']."JK".$row['query_replied']."<br>";
			if($row["query_user"]==$username)
			{
				$flag=1;
			}
		}
		}
		
		if($flag==0)
		{
		$sql= "INSERT INTO query(id,query_user, query_email, query_date, query_content, query_replied) VALUES ('null','$username', '$email', now(), '$query', 'no')";
		if ($conn->query($sql) === TRUE) {
		//	echo "New record created successfully";
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}}



?>




<!DOCTYPE html>
<html>
<head>
	<title>Dr.Sacoe</title>
	<link rel="stylesheet" type="text/css" href="nav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<style type="text/css">
	.well{
		border-radius:10px;
		background-color: #F1E6E6;
		width:580px;
		padding:10px;
		color:blue;
		margin-top:15px;
		margin-left: 20px;
	}
	.well input,textarea{
		border-radius: 5px;
	}
	.media{
		display:none;
		border-radius:10px;
		background-color: white;
		width:580px;
		padding:10px;
		color:black;
		margin-top:15px;
		margin-left: 20px;
	}
	.dropbtn
	 {
  background-color: none;
  color: black;
   font-size: 16px;
  border: none;
  cursor: pointer;
	}
	.dropdown 
	{
  position: relative;
  display: inline-block;
	}
	.dropdown-content 
	{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
	}
	.dropdown-content a 
	{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
	}
.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;}
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
#uname{
		display:block;
		font-size:30px;
		position:absolute;
		right:5%;
		background-color:black;
		border: 2px solid white;
		border-radius:5px;
		padding:5px;
		top:3%;

}

	
</style>
<script type="text/javascript">

	function comments()
	{
		var change = document.getElementById('media1');
		 //var displaySetting = change.style.display;
		 
		    if (change.style.display === "none") {
            change.style.display = "block";
       }
    else {
      change.style.display = "none";
      }
	}
	
</script>


</head>
<body >
	<h1>Counselling code-4954</h1>
	
	<div id="uname">
                        <a href="books.html">Register Here!</a>
                        <?php 
                        if (isset($_SESSION['s_username'])) {
                            # code...
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

                                if(isset($_SESSION['s_username']))
                                echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            
                    <?php    }
					?> 
	</div>
	<div class="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="department.html">Department</a></li>
		<li><a href="books.html">Books</a></li>
		<li><a href="facilities.html">Facilities</a></li>
		<li><a href="about.html">About</a></li>
	</ul>	
    </div>

    <form class="google" target="_blank" action="http://www.google.com/search" method="GET">
  		<input type="text" name="q">
  		<i class="fa fa-search"></i>
	</form>
	<br><br>
<div class="marquee"><p>A National level workshop on ETHICAL HACKING on 4th October 2019!! Last date for registration is october 1 2019..<br><br>Intra College Project Expo 2019 will be conducted on 17-10-2019!! win amazing prizes..all students are eligible for this..Free Registration..<br>International Conference on Recent Advance in Electrical,Electronics,Computer and Communication will be conducted on December 5,2019..<br></p></div>
<a href="appln.doc" download="applicationform"><input class="MyButton" type="button" value="Application Form"/></a>
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.779272381218!2d78.08699881478296!3d8.520798893874343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0386c3741481dd%3A0xefaf6b8346e3cdf3!2sDr.%20Sivanthi%20Aditanar%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1568825305315!5m2!1sen!2sin" width="250" height="300" frameborder="0" allowfullscreen=""></iframe>
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="POST" role="form">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="user_name" required>
                            <br><br>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="user_email" required></textarea>
                        </div>
                        	<br>
                        <div class="form-group">
                            <label> Query</label>
                            <textarea class="form-control" rows="3" name="user_query" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                	
                
                <!-- Comment -->

				<?php
				$sql = "SELECT * FROM query";
				$result = $conn->query($sql);
				$count=0;
				if ($result->num_rows > 0) {
					// output data of each row
					?><div class="media" id="media1"><?php
				while($row = $result->fetch_assoc()) {
					
?>


				<div  >
                           	<div>
                    <a class="pull-left" href="#">
                        <img class="media-object" height="40px" width="40px" src="piks/user.jpg" alt="user">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <?php echo $row['query_user']; ?>
                            <small><?php echo $row['query_date']; ?></small>
                        </h4>
                        <?php echo $row['query_content']; ?>
                	</div></div></div>
					<hr>
				   <?php
			}?></div><?php
		}
		$conn->close(); ?>  
               
                	<input type="button" value="Show/Hide Comments" id="cmntbtn" onclick="comments()">
            
					
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
</html>