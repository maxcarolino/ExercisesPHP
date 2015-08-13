<html>
	<head>
	<title> PHP Example 3-3 </title>
	</head>
	
	<body>
	<?php
		function counter()
		{
			static $count = 0;
			return $count++;
		}
		
		for ($i = 1; $i <= 11; $i++)
		{
			echo "Number is " .counter() ."<br>";
		}
	?>
	</body>
</html>
