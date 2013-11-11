<!DOCTYPE html>
<?php
	// error reporting, falls nicht in php.ini schon gesetzt
	ini_set('display_error', 1);
	error_reporting(E_ALL);
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<table border="1">
		<th>
			Land
		</th>
		<th>
			Hauptstadt
		</th>
		<?php
			// init array
			$countries = array(	"Schweiz"		=>	"Bern",
								"Frankreich" 	=>	"Paris",
								"Deutschland"	=>	"Berlin");
			
			// add single entry to array
			$countries["Italien"]	=	"Rom";
			$countries["Spanien"]	=	"Madrid";
			
			foreach ($countries as $country => $city) {
				echo "<tr><td>$country</td><td>$city</td></tr>";
			}
		?>
	</table>
	</body>
</html>
