<html>
	<head>
	<title> PHP Example 4-2 </title>
	</head>
	
	<body>
	<?php
		//echo
		echo "Print Meh!<br>";
		echo ("Print Meeh!<br>");

		//print()
		if (print("dragon<br>"))
		{
			print("knight<br>");
		}

		//printf()
		printf('Binary of decimal %d is %b<br>', 100, 100);

		//print_r()
		$heroes = array("Pudge", "Sniper", "Phantom Assassin");
		print_r($heroes);

	?>
	</body>
</html>
		 
