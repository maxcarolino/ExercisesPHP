<html>
	<head>
	<title> PHP Example 3-5 </title>
	</head>
	
	<body>
	<?php
		function countList()
		{
			if (func_num_args()==0)
			{
				return false;
			}
			
			$array = (func_get_args());
			$total = 0;
			foreach($array as $x)
			{
				$total+=$x;
			}
		
			return $total;
		}
		
		echo "Total for (10, 20, 30) is ".countList(10, 20, 30);
	?>
	</body>
</html>
