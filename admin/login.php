<?php
$username = $_POST['username'];
$password = $_POST['password'];
include 'datalogin.php';
$username = mysql_real_escape_string($username);
$query = "SELECT password, salt FROM users WHERE username = '$username';";
$result = mysql_query($query);
if(mysql_num_rows($result) < 1)
{
	header('Location: login_form.php');
}
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hash != $userData['password'])
{
	header('Location: login_form.php');
}
// login successful!