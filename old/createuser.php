<?php
/*
include_once 'dbconst.php';
	$email 	= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong');

	$password = filter_input(INPUT_POST, 'password') or die('pw missing');
	$phash = password_hash($password, PASSWORD_DEFAULT);

	//echo $phash ;
	//echo $email;

	
	$sql = 'insert into users(email, password) values (?,?)';
	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ss', $email, $phash);
	$stmt->execute();
	
	//echo 'inserted '.$email.' as id:'.($stmt->insert_id);


*/



require_once 'dbconst.php';

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong');
$password = filter_input(INPUT_POST, 'password') or die('pw missing');
$phash = password_hash($password, PASSWORD_DEFAULT);
//echo $phash;
//echo $email;

$sql = 'insert into login_users(email, password) values (?,?)';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ss', $email, $phash);
	$stmt->execute();


?>



