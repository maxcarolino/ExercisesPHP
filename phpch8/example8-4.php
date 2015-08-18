<?php

	$db = new SQLiteDatabase("c:/copy/library.sqlite");

	$sql = "SELECT a.name, b.title FROM books b, authors a WHERE a.authorid=b.authorid";

	$result = $db->query($sql);

	while ($row = $result->fetch()) {
	  echo "{$row['a.name']} is the author of: {$row['b.title']}<br/>";
	}
?>
