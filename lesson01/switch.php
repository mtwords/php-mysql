<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		$note = 6.5;
		
		var_dump($note);
		echo "<br/>";
		
		switch ($note) {
			case 1:
				echo "nicht bestanden<br/>";
				break;
			case 2:
				echo "sehr ungenügend<br/>";
				break;
			case 3:
				echo "ungenügend<br/>";
				break;
			case 4:
				echo "genügend<br/>";
				break;
			case 5:
				echo "gut<br/>";
				break;
			case 6:
				echo "Ausgezeichnet!<br/>";
				break;
			case $i > 6:
			case $i < 1:
				echo "ungültige Note<br/>";
				break;
			case !is_integer($note):
				echo "keine ganze note<br/>";
				break;
			default:
				echo "nicht bewertet<br/>";
				break;
		}
	?>
	</body>
</html>