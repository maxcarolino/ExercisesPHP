<html>
	<head>
	<title> PHP Example 4-3 </title>
	</head>
	
	<body>
	<?php

		//Accessing Individual Characters
		$address = "Pasay City";
		for ($i=0; $i < strlen($address); $i++)
		{
			printf("%dth character of the string is %s<br>", $i, $address{$i});
		}
		echo "<br>";
		echo "<br>";

		//toUpper, toLower
		$string = "I'm a String!";
		print(strtolower($string)."<br>");
		print(strtoupper($string)."<br>");
		echo "<br>";

		//HTML strip_tags()
		$strip = "<b> This string is bold. </b>";
		echo "$strip <br>";
		$now = strip_tags($strip);
		echo "$now <br><br>";

		//URL encoding/decoding
		$input = "max carolino";
		$raw = rawurlencode($input);
		$url = urlencode($input);
		echo "https://github.com/{$raw} <br>";
		echo "https://github.com/{$url} <br>";
	?>
	</body>
</html>
