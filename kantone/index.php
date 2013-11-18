<?php
	require_once("kanton.php");
	require_once("KantonHandler.php");

		
	$url = 'http://localhost/exercises/kantone/resolver.php?service=kantone&methode=list&sort=name';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	// debug / log
	//$verbose = fopen('php://temp', 'rw+');
	//curl_setopt($ch, CURLOPT_STDERR, $verbose);

	//$info = curl_getinfo($ch, CURLINFO_HEADER_OUT);
	//var_dump($info);
	
	$body = curl_exec($ch);
	var_dump($body);
	curl_close($ch);
	// Via jsonprint_r(Kanton::getInstance()->sortByName());
	$json = json_decode($body);
	
	// debug / logid)
	var_dump($json);
	//rewind($verbose);
	//$verboseLog = stream_get_contents($verbose);
	//var_dump($verboseLog);
?>