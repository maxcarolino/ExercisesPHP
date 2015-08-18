<?php
	//using MySQLi
	try {
  	  $db = new mysqli('localhost','max','pass1234$$$$','library');
	  // connection successful
	  $ins_sql = <<<SQL
	  INSERT INTO books
	  VALUES ('{$_POST['title']}', {$_POST['pub_year']}, '{$_POST['ISBN']}');
SQL;
	  $dis_sql = "SELECT * FROM books";

	   //check if query is successful
	   if(!$result = $db->query($ins_sql)) {
	     die('There was an error inserting the data [' . $db->error . ']');
	   }
	   else {
	     echo "Insertion Succesful! <br>";    
	   }

	  $db->close;
	}
	catch (Exception $error) {
	  die("Connection failed: " . $error->getMessage());
	}
?>
