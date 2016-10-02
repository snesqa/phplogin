<?php
require_once 'dbconst.php'; // establish db connection

/*
	This page stores data in the database when a new user signs up with the sign up form.
	


*/
// input data from the form is filtered, all illigal characters are removed, the value is stored in variable $email.
// die() prints error msg if error occurs.
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('something went wrong while storing your email');
$password = filter_input(INPUT_POST, 'password') or die('pw missing');
$phash = password_hash($password, PASSWORD_DEFAULT); // password is hashed and stored in variable $phash
//echo $phash;
//echo $email;

// inserting data from form into table login_users
$sql = 'INSERT INTO login_users ( email , password) VALUES ( ? , ? )'; // using placeholders (?, ?) 

	$stmt = $link->prepare($sql); // prepares db for sql,  
	$stmt->bind_param('ss', $email, $phash); // binding placeholders with parameters 'ss' is 'string string', email, password are both strings in this case. 
	$stmt->execute(); // excetutes request and we can output email and id to check 
	echo 'inserted email : '.$email.' as id:'.($stmt->insert_id); // id for inserted record
	echo 'You are registered in our database, your username is : '.$email. ' Go to <a href="index.php">login</a>';

	//Instead of using header(), the output is echo'ed so we can see what happened, followed by a link to login page
	
	//header("location: index.php?signup=true"); // 
?>



