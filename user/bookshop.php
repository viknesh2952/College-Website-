<?php
session_start();
?>
<?php include("header.php");?>

	<form>
	<input class="MyButton" type="button" value="CSE" onclick="window.location.href='csebooks.php'" />
	<input class="MyButton" type="button" value="ECE" onclick="window.location.href='ecebooks.php'" />
	<input class="MyButton" type="button" value="IT" onclick="window.location.href='itbooks.php'" />
	<input class="MyButton" type="button" value="EEE" onclick="window.location.href='eeebooks.php'" />
	<input class="MyButton" type="button" value="MECHANICAL" onclick="window.location.href='mechbooks.php'" />
    <input class="MyButton" type="button" value="CIVIL" onclick="window.location.href='civilbooks.php'" />
   
	</form>
	<?php include("footer.php");?>
