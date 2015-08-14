<html>
	<head>
	<title> PHP Example 5-2 </title>
	</head>
	
	<body>
	<?php
	function hasRequired($array, $requiredFields)
	{
		$keys = array_keys($array);
		foreach ($requiredFields as $fieldName) {
			if (!in_array($fieldName, $keys)) {
				return false;
			}
		}
		
		return true;
	}
	if ($_POST['submitted']) {
		echo "<p>You ";
		echo hasRequired($_POST, array('name', 'email_address')) ? "did" : "did not";
		echo " have all the required fields.</p>";
	} 
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<p>Name: <input type="text" name="name" /><br />
	Email address: <input type="text" name="email_address" /><br />
	Age (optional): <input type="text" name="age" /></p>
	<p align="center"><input type="submit" value="submit" name="submitted" /></p>
	</form>

	</body>
</html>
