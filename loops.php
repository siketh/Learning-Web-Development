<!DOCTYPE html>
<html>
	
<head>
	<title>PHP Loops</title>
</head>

<body>
	<?php 

	echo "While 'index' is less than 10, incremement and loop<br>";

	$index = 0;
	while($index < 10)
	{
		echo $index++ . "<br>";
	}

	echo "For 'i' less then 10, increment and loop<br>";
	for ($i=0; $i < 10; $i++) 
	{ 
		echo $i . "<br>";
	}

	echo "For each element in array 'names', echo the name<br>";
	$names = $names = array("Trevor", "Roman", "Mark", "Roman");
	foreach ($names as $value) 
	{
		echo $value . "<br>";
	}

	?>

</body>

</html>