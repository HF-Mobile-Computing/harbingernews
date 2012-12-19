<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://www.404.php.net');
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_exec($ch);
		curl_close($ch);
		
		if(curl_errno($ch))
		{
			echo 'Curl error: ' . curl_error($ch);	
		}
	?>
</body>
</html>
