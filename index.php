<?php

// if(isset($_GET['signup'])){ 
// 	$signup = 'You have succesfully signed up';
// }

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Snezana Ilic" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login</title>
</head>
<body>
	
	<div class="contact-wrapper">
		
		<p><?php //echo $signup ?></p><!-- prints out the user feedback  -->
		<p>Please fill in the fields to login</p>
		<form action="loginlogic.php" method="post">
			Email*</i>
			<input type="email" name="email">
			Password*
			<input type="password" name="password">
			<input type="submit" name="submitReg" value="Login">
		</form>
		<a  href="register.php">Sign up</a>
		<span class="required">required field*</span>
	</div>
</body>
</html>
