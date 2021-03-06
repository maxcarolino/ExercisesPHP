<html>
	<head>
	<title> PHP Example 5-1 </title>
	</head>
	
	<body>
	<?php

		//initializing an array
		$index_array = array("Sand King", "Crystal Maiden", "Faceless Void");
		$assoc_array = array(
				'str' => "Kunkka",
				'agi' => "Terrorblade",
				'int' => "Lich"
				);
		echo "Index array has values ";
		foreach ($index_array as $i) {
			echo "$i, ";
		}
		echo "<br>";
		
		echo "Assoc array has values ";
		foreach ($assoc_array as $i) {
			echo "$i, ";
		}
		echo "<br><br>";

		//adding values to the end
		$index_array[] = "Omniknight";
		$assoc_array[] = "Storm Spirit";
		echo "Added {$index_array[3]} to the index array <br>";
		echo "Added {$assoc_array[0]} to the assoc array <br>";
		echo "<br>";

		//size of an array;
		$size1 = count($index_array);
		$size2 = sizeof($assoc_array);
		echo "Index array has {$size1} elements <br>";
		echo "Assoc array has {$size2} elements <br>";
		echo "<br>";

		//padding an array
		$items = array("courier","tp scroll");
		$pad_items = array_pad($items, 5, "wards");
		echo "Support players should buy ";
		foreach ($pad_items as $j) {
			echo "$j, ";
		}
	?>
	</body>
</html>

		
