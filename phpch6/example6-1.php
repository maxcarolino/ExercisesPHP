<html>
	<head>
	<title> Display Classes </title>
	</head>
	
	<body>
	<?php
	function displayClasses()
	{
		$classes = get_declared_classes();

		foreach ($classes as $class) {
		  echo "Showing information about {$class}<br />";
		  echo "Class methods:<br />";

		  $methods = get_class_methods($class);

		  if (!count($methods)) {
		       echo "<i>None</i><br />";
		  }
		  else {
		       foreach ($methods as $method) {
		         echo "<b>{$method}</b>()<br />";
		       }
		  }

		  echo "Class properties:<br />";

		  $properties = get_class_vars($class);

		  if (!count($properties)) {
		    echo "<i>None</i><br />";
		  }
		  else {
		    foreach(array_keys($properties) as $property) {
		      echo "<b>\${$property}</b><br />";
		    }
		  }
		
		  echo "<hr />";
	        }
	}

	echo displayClasses();
	?>
	</body>
</html>


	
