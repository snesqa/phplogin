<?php 
session_start();
ob_start();

echo 'Session id : '. session_id(); // prints session id set on previous page - loginlogic.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Snezana Ilic" />
	<title>Restricted</title>
</head>
<body>


<?php

 if(!isset($_SESSION['uid'])){ // check if session is not set, if not then redirect to index

	header("location: index.php");
	exit();
 }else{ // else print out welcome message with link to logout.php 
	echo "<h1>Welcome to the secret page, you have succesfully logged in!</h1>\n";
	echo '<a href="logout.php">logout</a>';

} 

?>

</body>
</html>

