
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<?php
if(!isset($_COOKIE["uname"]))
 { 
	 header ("Location:login.php");
 }

?>
</head>
<body>
	<h1>Welcome <?php echo $_COOKIE["uname"]; ?></h1>
</body>
</html>