<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		$category_s_name = 'S';
		$category_s_limit = 20;
		$category_m_name = 'M';
		$category_m_limit = 40;
		$category_l_name = 'L';
		$category_l_limit = 60;
		$category_xl_name = 'XL';
		
		$baggage_weight = 61;
	
		echo "Das Gepäckstückt wiegt $baggage_weight kg. ";
		if ($baggage_weight <= $category_s_limit) {
			echo "Es gehört zur Kategorie $category_s_name (bis $category_s_limit kg)";
		} else if ($baggage_weight <= $category_m_limit) {
			echo "Es gehört zur Kategorie $category_m_name (bis $category_m_limit kg)";
		} else if ($baggage_weight <= $category_l_limit) {
			echo "Es gehört zur Kategorie $category_l_name (bis $category_l_limit kg)";
		} else {
			echo "Es gehört zur Kategorie $category_xl_name (über $category_l_limit kg)";
		}
	?>
	</body>
</html>
