<?php 
session_start(); //starts session

$_SESSION = array(); // puts session into empty array

if(ini_get("session.use_cookies")){ // destroy session cookies by manipulating the time the cookie was set - 42000 

	$param = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000, 
		$param['path'], $param['domain'],
		$param['secure'], $param['httponly']
);

}

session_destroy(); // destroy session
header("Location: index.php"); // go to start page 

/* this is another way to end a session.
session_start();

session_unset();

session_destroy();

header("Location: login.php");*/
 ?>