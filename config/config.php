<?php
	// Database credentials
	define('DB_SERVER', 'localhost:3306');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '19asd19asd');
	define('DB_NAME', 'bddcesfam');

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam', 3306);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}
?>