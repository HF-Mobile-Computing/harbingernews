<?php
session_start(); // must call session_start before using an $_SESSION variables

include 'sessions.php';
include 'datalogin.php';

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);
$query = "SELECT password, salt FROM users WHERE username = '$username';";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1)
{
	header('Location: login.php');
	die();
	
}
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password'])
{
	header('Location: login.php');
	die();
} else {
	validateUser();
}
$_SESSION['username'] = $username;
header('Location: /harbingernews/');
// login successful!