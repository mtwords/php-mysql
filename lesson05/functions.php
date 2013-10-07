<!DOCTYPE html>
<?php
	function kosten($anzahl, $preis = 45, $currency='CHF')
	{
		echo "Kosten: " . $anzahl * $preis . " " . $currency . "<br/>";
	}
?>
<html>
	<body>
		<p>
		<?php
			kosten(7, 39.99, "Dollar");
			kosten(10);
			kosten(15, 29);
		?>
		</p>
	</body>	
</html>
