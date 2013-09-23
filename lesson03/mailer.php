<?php
// sender address
$sender = 'oli.aeschbi@gmail.com';
// name of sender address
$sendername = 'PHP-Formmailer with exim4';

// receiver, must be entered by user
$receiver = 'none';

// topic of the mail
$topic = 'Message';

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$header = array();
	$header[] = "From: " . mb_encode_mimeheader($sendername, "utf-8", "Q") . " <" . $sender . ">";
	$header[] = "MIME-Version: 1.0";
	$header[] = "Content-type: text/plain; charset=utf-8";
	$header[] = "Content-transfer-encoding: 8bit";

	$mailtext = "";

	// get receiver
	if ($_POST["receiver"] != null) {
		$receiver = $_POST["receiver"];
	} else {
		die("Kein Empfänger angegeben");
	}

	// get topic, if any
	if ($_POST["topic"] != null) {
		$topic = $_POST["topic"];
	}

	// get message, if any
	if ($_POST["message"] != null) {
		$mailtext = $_POST["message"];
	}

	mail($receiver, mb_encode_mimeheader($topic, "utf-8", "Q"), $mailtext, implode("\n", $header)) or die("Die Mail konnte nicht versendet werden.");
	exit ;
}
?>