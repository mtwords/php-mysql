<?php
	for ($i = -2; $i  <= 2; $i ++) { 
		if ($i == 0) {
			echo "division by 0 not allowed --> continue<br/>";
			continue;
		}
		echo "5 / $i = " . 5 / $i . "<br/>";
	}
?>