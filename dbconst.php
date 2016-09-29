<?php 

	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = 'root';
	const DB_NAME = 'phplogin';


	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);
}
/*
	$servername = "localhost";
	$username = "root";
	$password = "root";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=phplogin", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully";
	    }
	catch(PDOException $e)
	    {
    echo "Connection failed: " . $e->getMessage();
    }
}*/

?>
