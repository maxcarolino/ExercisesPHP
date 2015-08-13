<html>
	<head>
	<title> PHP Example 3-1 & 3-2 </title>
	</head>
	
	<body>
	<?php
		function strcat($str1, $str2)
		{
			return $str1.$str2;
		}
		
		$name = "Maximino Carolino III";
		$pos = " is a Junior Software Engineer";
		echo strcat($name, $pos);
	?>
	</body>
</html>
