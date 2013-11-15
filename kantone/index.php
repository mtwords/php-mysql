<?php
	require_once("kanton.php");
	
	$kanton = new Kanton();
	print_r($kanton->findKantonByKuerzel("ZH"));
	//$kanton->printKantone();
?>