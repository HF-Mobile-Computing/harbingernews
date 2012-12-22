<?php
$dbhost = '127.0.0.1';
$dbname = 'harbinger';
$dbuser = 'root';
$dbpass = 'laFr0scia';
$con = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname, $con) or die(mysql_error());
?>