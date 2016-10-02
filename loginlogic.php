<?php  
session_start(); // no code should come before session_start() it must be first. 
ob_start(); //starts output buffer due to using header() function giving the 'header already sent' error. 
 	require_once('dbconst.php'); // db connection

 	/*
		This page contains code for user login, after the user has registered in the sign up form,
		the user is readirected to index.php and as after typing data in field and clicking the submit
		link, the form jumps to this page and process the code and evaluate and verify the data.
		If there is a match in the database, the user gets access to the restricted.php page, and is logged in with session.
 	*/

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die($email_error_msg);
	// filter_input() filters the datatype used in post or get - input_post in this case, since we are sending form data with credentials wich we want to keep hidden. Get method exposes all sent data in the adress bar(url). 
	//FILTER_VALIDATE_EMAIL- removes illigal characters and checks if it's a valid email- with @, 2 characters and a dot. The data from the form field is assigned to a $email variable.

	$password = filter_input(INPUT_POST, 'password') or die($password_error_msg); // die() msg are meant for developers, not users and are difficult to decifer if somethign goes wrong on the site.
	$email_error_msg = 'Retype email'; // I made my own error msg to easy identify error
	$password_error_msg = 'Wrong password';
	//echo $email;
	
    $sql = "SELECT id, password FROM login_users where email=?"; // reads from db
	
	$stmt = $link->prepare($sql);// the db connection is stored in $stmt and prepared for the sql($sql) 
    $stmt->bind_param('s', $email); //use bind_param if there is a placeholder. The 's' represent the datatype of the parameter we want to read and bind to the connection, the second param is the value of that string.
    $stmt->execute(); // the code is excetuted
    $stmt->bind_result($id, $phash); // variables are declared to store data // get result if any. 
    if($stmt->fetch()){  //conditional statement, fetches affected rows in db 
        echo  'User id : ' .$id.'('.$email.'), hashed password : '.$phash.'<br />'; //printing out the email and hashed password	
  }
//	echo password_verify($password, $phash) ? 'succes': 'fail'; // ternary operator 
	
	if(password_verify($password, $phash)){ // verifying password that matched the hash, evaluating the password from the form ($password) againt the hashed password from the database($phash).
			$_SESSION['uid'] = $id;  // starts session uid and assign it value of id(user id from the db). Detemines if a user-login is valid and stores user id in session
			echo 'Session id : '. session_id().PHP_EOL;
		echo ' <a href="restricted.php">Go to secret page</a>';
	}
	
/*
if (!isset($_SESSION['uid'])){ // if the seesion is not set, then go to index else go to restricted page and you are logged on :)
	header("location: index.php");
}
else {
	header("location: restricted.php");
}
*/

?>

