<html>
	<head>
	<title> PHP Example 5-2 </title>
	</head>
	
	<body>
	<?php
	
		//multi-dimensional arrays
		$row0 = array(1, 2, 3);
		$row1 = array(4, 5, 6);
		$row2 = array(7, 8, 9);
		$multi = array($row0, $row1, $row2);
		echo "Multi-dimensional arrays <br>";		
		print_r($multi);
		echo "<br><br>";

		//extracting multiple values
		$person = array("Fred", 35, "Betty");
		list($name, $age, $wife) = $person;
		echo "I'm {$name} and I'm {$age} y/o. My wife is {$wife}. <br><br>";

		//slicing an array
		$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
		$middle = array_slice($people, 2, 2);
		echo "Slicing an array <br>";
		print_r($middle);
		echo "<br><br>";

		//removing and inserting elements
		$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
		$new = array("it", "coe", "ece");
		echo "Subjects array has values ";
		foreach ($subjects as $s) {
			echo "$s, ";
		}
		echo "<br>";
		$removed = array_splice($subjects, 2, 2);
		echo "Subjects removed were ";
		foreach ($removed as $r) {
			echo "$r, ";
		}
		echo "<br>";
		echo "I will insert subjects it, coe, ece as a replacement ";
		array_splice($subjects, 2, 0, $new);
		echo "<br>";
		echo "Now subjects will be ";
		foreach ($subjects as $m) {
			echo "$m, ";
		}
		
	?>
	</body>
</html>

