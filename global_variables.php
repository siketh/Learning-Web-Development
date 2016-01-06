<!DOCTYPE html>
<html>
	
<head>
	<title>PHP Tutolrial</title>
</head>

<body>
	<form action="global_variables.php" method="post">
		<input type="text" name="email">
		<input type="submit" name="sub" value="submit">
	</form>
</body>

</html>

<?php 

	if(isset($_POST['sub']))
	{
		echo "Your email is: " . $_POST['email'];
	}

?>