<?php  
session_start();
 	require_once('dbconst.php');


	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Missing or illegal parameter');
	$password = filter_input(INPUT_POST, 'password') or die('Missing or illegal parameter'); 
	
	//echo $email;
	//echo $name;
	//echo $sql;

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
	echo 'log in success yay';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tillykke</title>
</head>
<body>


<?php

?>

<a href="restricted.php">Hemmelig info</a>
	
</body>
</html>