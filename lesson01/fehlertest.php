<!DOCTYPE html>
<?php
	// error reporting, falls nicht in php.ini schon gesetzt
	ini_set('display_error', 1);
	error_reporting(E_ALL);
?>
<html>
	<head></head>
	<body>
		<h2>viel Fehler im Script</h2>
		<?php
			ini_set('display_errors', 1);
			error_reporting(E_ALL);

			// undefined variable
			echo "Der Wert der Variable i ist: " .+ $i;

			// division by zero
			echo 10 / 0;

			// calling undefined function
			test();
		?>
	</body>
</html>
