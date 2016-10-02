<?php
require_once 'dbconst.php'; // establish db connection

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong while storing your email');
$password = filter_input(INPUT_POST, 'password') or die('pw missing');
$phash = password_hash($password, PASSWORD_DEFAULT);
//echo $phash;
//echo $email;

$sql = 'INSERT INTO login_users ( email , password) VALUES ( ? , ? )';

	$stmt = $link->prepare($sql); 
	$stmt->bind_param('ss', $email, $phash);
	$stmt->execute();
	echo 'inserted '.$email.' as id:'.($stmt->insert_id); // id for inserted record
	echo 'Your username is '.$email.' go to <a href="index.php">login</a>'
	header("location: index.php?signup=true");
?>



