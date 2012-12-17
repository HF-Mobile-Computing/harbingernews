<?php

	$host="127.0.0.1";
	$username="root";
	$password="laFr0scia";
	$db_name="harbinger";
	$tbl_name="homepage";

	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");
	
	$recent="recent";

	$sql="SELECT * FROM $tbl_name WHERE typeName='recent'";
	$result=mysql_query($sql);
	
	echo("$result");

?>