<?php
session_start();
include '../sessions.php';
if(!isLoggedIn())
{
	header('Location: /harbingernews/login.php');
	die();
}
?>
<!DOCTYPE html>
<html>
<head>


</head>
<body>

	<p><?php echo $_SESSION['username']; ?></p>

</body>
</html>