<?php	
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = 'root';
	const DB_NAME = 'phplogin';

	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) { // if there is and error tell which one
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);
}


?>
