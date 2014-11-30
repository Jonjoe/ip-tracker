<?php 
	$current = file_get_contents("ips.txt");
	$i = $_SERVER["REMOTE_ADDR"];
	$output = $current.$i." | ";
	$f = fopen('ips.txt', 'w');
	fwrite($f, $output);
	fclose($f);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Lost</title>
</head>
<body>
	<img src="f.gif" alt="">
</body>
</html>