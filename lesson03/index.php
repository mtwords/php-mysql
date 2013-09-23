<!DOCTYPE html>
<?php
	// error reporting, falls nicht in php.ini schon gesetzt
	ini_set('display_error', 1);
	error_reporting(E_ALL);
?>
<html>
	<head>
		<title>Mail-Form</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" media="screen" />
	</head>
	<body>
		<h1>Send an e-mail</h1>
		<form action="mailer.php" method="POST">
			<table id="mailform">
				<tr>
					<td>to</td>
					<td><input type="email" name="receiver" /></td>
				</tr>
				<tr>
					<td>topic</td>
					<td><input type="text" name="topic" /></td>
				</tr>
				<tr>
					<td>message</td>
					<td><textarea name="message" rows="5" ></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><button type="submit" value="send">send</button></td>
				</tr>
			</table>
		</form>
	</body>
</html>