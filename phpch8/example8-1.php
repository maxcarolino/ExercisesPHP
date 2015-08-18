<?php
	//I have modified the SQL statements & connection details
	try {
	  $db = new PDO("mysql:host=localhost;dbname=library", "max", "pass1234$$$$");
	  // connection successful
	}
	catch (Exception $error) {
	die("Connection failed: " . $error->getMessage());
	}

	try {
	  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $db->beginTransaction();
	  $db->exec("insert into books (title, pub_year, ISBN) values ('Harry Potter', 2005, '0-132-58132-J')" );
	  $db->exec("insert into books (title, pub_year, ISBN) values ('Dragon Ball Z', 2000, '0-999-28476-S')" );
	  $db->commit();
	  echo "Transaction Success!";
	}
	catch (Exception $error) {
	  $db->rollback();
	  echo "Transaction not completed: " . $error->getMessage();
	}
?>

