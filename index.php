<?php require_once 'dbconst.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Snezana Ilic" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>login</title>
</head>
<body>

	<div class="contact-wrapper">
		<form action="loginlogic.php" method="post">
			Email*</i>
			<input type="email" name="email" required>
			Password*
			<input type="password" name="password" required>
			<input type="submit" name="submitReg" value="Login">
		</form>
		<a  href="register.php">Sign up</a>
		<span class="required">required field*</span>
	</div>
</body>
</html>