<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);
require_once ("schweizer.php");
require_once ("mensch.php");
require_once ("lebewesen.php");

class class_app {

	private $mensch;
	private $pers;

	public function __construct() {

	}

	public function run() {

		$mensch = new Mensch("Oliver Aeschbacher", "männlich");
		echo "<p>" . $mensch -> getName() . "</br>";

		$mensch -> umbenennen("Oli Aeschbi");

		echo "<p>" . "Alter: " . $mensch -> getAlter() . "<br/>";

		if (is_a($mensch, "Mensch")) {
			echo "Ist ein Mensch<br/>";
		} else {
			echo "Ist kein Mensch<br/>";
		}

		echo "Vorfahre: " . Mensch::getVorfahre() . "<br/>";
		Mensch::neueEvolutionstheorie("Alien");
		echo "Vorfahre: " . Mensch::getVorfahre() . "<br/>";

		$pers = new Schweizer("Hans Müller", "männdlich");
		$pers -> umbenennen("Müll Meier");

	}

}

$app = new class_app();
$app -> run();
?>