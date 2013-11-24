<?php
	$url = 'http://localhost/exercises/kantone/resolver.php?service=kantone&methode=single&id=AG';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	
	$body = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($body);
	print_r($json);
	//print_r($body);
?>