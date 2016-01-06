<!DOCTYPE html>
<html>
	
<head>
	<title>PHP Functions</title>
</head>

<body>

	<?php 

		function hello($name)
		{
			echo "Hello world!<br>";

			if(strcmp($name, "Trevor") == 0)
				echo "Hello " . $name . "!<br>";
			else
				echo "Hello stranger!<br>";
		}

		hello("Trevor");
		hello("Mark");

	?>

</body>

</html>