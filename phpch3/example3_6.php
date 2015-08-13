<html>
	<head>
	<title> PHP Example 3-1 & 3-2 </title>
	</head>
	
	<body>
	<?php
	$array = array("really long string here, boy", "this", "middling length", "larger");
	usort($array, function($a, $b) 
	{
		return strlen($a) - strlen($b);
	});
	print_r($array);
	?>
	</body>
</html>

