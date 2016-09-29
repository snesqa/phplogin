<?php require_once 'dbconst.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Snezana Ilic" />
<title>login</title>
</head>
<body>

 
<form action="loginlogic.php" method="post">
  Username:
  <input type="email" name="email" required>
  <br>
  Password:
  <input type="password" name="password" required>
  <br>
  <input type="submit" name="submitReg" value="Login">
</form>

</body>
</html>