<!DOCTYPE html>
<html>
	
<head>
	<title>PHP Logic</title>
</head>

<body>
	<form action="logic.php" method="post">
		<input type="password" name="pass"/>
		<input type="submit" name="sub" value="Submit"/>
	</form>
	
	<?php 

	if(isset($_POST['sub']))
	{
		$pass = $_POST['pass'];
	}
	
	if($pass=='')
	{
		echo "Nothing entered in field";
		exit();	// don't execute the rest of the code
	}
	elseif(strlen($pass) < 6)
	{
		echo "Password must be greater than or equal to 6 letters";
	}
	else
	{
		echo "Password is sufficient";
	}

	?>
</body>

</html>

<?php 

	

?>