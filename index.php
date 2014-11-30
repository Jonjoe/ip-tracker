<?php 
	$current = file_get_contents("ips.txt");
	$i = $_SERVER["REMOTE_ADDR"];
	$output = $current.$i." | ";
	$f = fopen('ips.txt', 'w');
	fwrite($f, $output);
	fclose($f);



	if (is_writable("ips.txt")) {
		echo "true";
	} else {
		echo "false";
	}
	// echo "Your IP is $ipaddress!";