<html>
	<head>
	<title> PHP Example 4-3 </title>
	</head>
	
	<body>
	<?php
		//using == and ===
		$str1 = "DotA";
		$str2 = "doto";
		$success = "strings are the same.";
		$failed = "strings are not the same.";
		echo "String1 is $str1, String2 is $str2 <br><br>";
		echo "using == and === <br>";
		if ($str1 == $str2) {
			echo "$success <br>";
		} elseif ($str1 === $str2) {
			echo "$success <br>";
		} else {
			echo "$failed <br><br>";
		}

		//using strcmp();
		$output = strcmp($str1, $str2);
		echo "Using strcmp() result is $output <br><br>";

		//using strcasecmp();
		$casecmp = strcasecmp($str1, $str2);
		echo "Using strcasecmp() result is $casecmp <br><br>";

		//using soundex and metaphone
		if(soundex($str1) == soundex($str2)) {
			echo "$str1 sounds like $str2 using soundex <br>";
		} else {
			echo "$str1 does not sounds like $str2 using soundex <br>";
		}

		if(metaphone($str1) == metaphone($str2)) {
			echo "$str1 sounds like $str2 using metaphone <br>";
		} else {
			echo "$str1 does not sounds like $str2 using metaphone <br>";
		}

	?>
	</body>
</head>
