<?php
//retrieve our data from POST
$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if($pass1 != $pass2)
    header('Location: register_form.php');
if(strlen($username) > 30)
    header('Location: register_form.php');
$hash = hash('sha256', $pass1);
function createSalt()
{
	$string = md5(uniqid(rand(), true));
	return substr($string, 0 , 3);
}
$salt = createSalt();
$hash = hash('sha256', $salt . $hash);

include 'datalogin.php';
// sanitize username
$username = mysql_real_escape_string($username);
$nameCheck = "SELECT * FROM users WHERE username='$username';";
$check = mysql_query($nameCheck);
if(mysql_num_rows($check) > 0)
{
	echo "Sorry, that username has been taken already.  Please try a new username.";
	mysql_close();
} else {
	$query = "INSERT INTO users ( username, password, salt) VALUES ('$username' , '$hash' , '$salt' );";
	mysql_query($query);
	mysql_close();
	header('Location: login.php');
}
?>