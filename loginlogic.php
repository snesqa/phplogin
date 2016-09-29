<?php  
session_start();
ob_start();
 	require_once('dbconst.php');

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die($email_error_msg);
	$password = filter_input(INPUT_POST, 'password') or die($password_error_msg); 
	$email_error_msg = 'Retype email';
	$password_error_msg = 'Wrong password';
	//echo $email;
	
    $sql = "SELECT id, password FROM login_users where email=?";
	
	$stmt = $link->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $phash);
    if($stmt->fetch()){   
        echo $id.'('.$email.') : '.$phash.'<br />';	
  }
//	echo password_verify($password, $phash) ? 'succes': 'fail'; // ternary operator 
	if(password_verify($password, $phash)){
			$_SESSION['uid'] = $id;
	}

if (!isset($_SESSION['uid'])){
	header("location: index.php");
}
else {
	header("location: restricted.php");
}
?>

