<?php 

	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = 'root';
	const DB_NAME = 'phplogin';


	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);

}/*
	$link->set_charset('utf8');

	const DB_HOST = 'webhost';
	const DB_USER = 'sneska';
	const DB_PASS = 'secret';
	const DB_NAME = 'mydbname';


	$link = new mysqli( DB_HOST, DB_USER, DB_PASS ,DB_NAME );

	if ($link->connect_error) {
		die('connect error ('.$link->connect_errno.') '.$link->connect_error);

}
	$link->set_charset('utf8');
*/

?>
