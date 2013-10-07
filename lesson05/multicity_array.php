<?php
$multiCity = array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);

	function echo_array($multiCity) {
		// header ignorieren
	 	$body = array_slice($multiCity, 1);
		foreach ($body as $key => $value) {
			echo "<tr>";
			foreach ($value as $key => $value) {
				echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}
	}

?>
<html>
<head>
<title>Multi-dimensional Array</title>
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>
</head>
 <body>
<h2>Auflistung Array<br /></h2>
 <table>
<thead>
<tr>
<?php

	$header = array_slice($multiCity, 0, 1); // ==> array(0, array(city, bla, bla))
	foreach ($header[0] as $key => $value) {
		echo "<th>" . $value . "</th>";
	}
?>
</tr>
</thead>
 <?php
 	echo_array($multiCity);
?>
 </table>

<h2>Auflistung der St&auml;dte in Asien<br /></h2>

<table>
	<tr>
		<?php
			$asia = array_walk($multiCity, function($array) {
				if ($array[2] === 'Asia') {
					echo "<tr>";
					foreach ($array as $key => $value) {
						echo "<td>" . $value . "</td>";
					}
					echo "</tr>";
				}
			});
		?>
	</tr>
</table>

<h2>Auflistung der Kontinente, sowie die Zahl der L&auml;nder darin (im Array)<br /></h2>

<h2>Auflistung nach L&auml;nder A-Z <br /></h2>
<table>
	<?php
		usort($multiCity, function($a, $b) {
			if ($a[1] == $b[1]) {
				return 0;
			}
			return ($a[1] < $b[1]) ? -1 : 1;
		});

		foreach ($multiCity as $sortedCities) {
			echo "<tr>" . "<td>" . $sortedCities[0] . "</td><td>" . $sortedCities[1] . "</td><td>" . $sortedCities[2] . "</td></tr>";
		}
	?>
</table>
</body>
</html>