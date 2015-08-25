<?php

	$tz = date_default_timezone_get(); //ini_get is not working
	$dtz = new DateTimeZone($tz);
	$dt = new DateTime("now",$dtz);

	echo "date: " . $dt->format("Y-m-d h:i:s")."<br><br>";

	//get the diff of two dates

	$past = new DateTime("1994-08-06 18:00:00", $dtz);
	$current = new DateTime("now", $dtz);

	//creates a new instance of DateInterval
	$diff = $past->diff($current);

	$pastString = $past->format("Y-m-d");
	$currentString = $current->format("Y-m-d");
	$diffString = $diff->format("%yy %mm %dd");

	echo "Difference between {$pastString} and {$currentString} is {$diffString}"."<br><br>";

	//using the getLocation() method
	
	echo "Server's Time Zone: {$tz}<br/>";
	foreach ($dtz->getLocation() as $key => $value) {
	  echo "{$key} {$value}<br/>";
	}
?>
