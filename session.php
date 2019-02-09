<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

session_start();// Starting Session
// Storing Session

$user_check=$_SESSION['login_user'];

if ($user_check == "user")
	$login_session = "profilo_user";
else
	header('Location: index.php'); // Redirecting To Home Page
?>
