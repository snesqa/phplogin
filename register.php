<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Snezana Ilic" />
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="contact-wrapper">
<form action="registerlogic.php" method="post">
Email*
<input type="email" name="email" required>
Password*
<input type="password" name="password" required>
<input type="submit" name="submitReg" value="Sign up">
</form>
<span class="required">required field*</span>
<a href="index.php">Login</a>
</div>
</body>
</html>
