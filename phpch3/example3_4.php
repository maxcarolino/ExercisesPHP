<html>
	<head>
	<title> PHP Example 3-5 </title>
	</head>
	
	<body>
	<?php
		function doubler(&$value)
		{
			$value = $value << 1;
		}
		$a = 3;
		doubler($a);
		echo "Number is 3 doubled value is ".$a;
	?>
	</body>
</html>
