<?php if(isset($_GET['register'])){ 
	$error_msg = 'You need to sign up first';
} ?>
<!DOCTYPE html>
<html lang="en">
<head><!--  this page holds the register form and upon submitting redirects to registerlogic.php -->
	<meta charset="UTF-8">
	<meta name="author" content="Snezana Ilic" />
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="contact-wrapper">
<p class="head-text">Sign up to our site!</p>
<p class="error"><?php echo $error_msg ?></p><!-- prints out error msg if incorrect data is submittet  -->
<form action="registerlogic.php" method="post">
Email*
<input type="email" name="email">
Password*
<input type="password" name="password">
<input type="submit" name="submitReg" value="Sign up">
</form>
<span class="required">required field*</span>
<a href="index.php">Login</a>
</div>
</body>
</html>
