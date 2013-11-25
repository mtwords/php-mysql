<?php
	require_once("kanton.php");

	/**
	 * Singleton for handling Kantone
	 */
	class KantonHandler {
		private static $instance = NULL;

		private function __construct() {}
		
		public static function getInstance() {
			if (!self::$instance){
			    self::$instance = new KantonHandler();
			}
			return self::$instance;
		}

		public function sortByName() {
			$kantone = new Kanton();
			return $kantone->sortByName();
		}

		public function sortByHauptort() {
			$kantone = new Kanton();
			return $kantone->sortByHauptort();
		}
		
		public function sortByEinwohner() {
			$kantone = new Kanton();
			return $kantone->sortByEinwohner();
		}
	
		public function sortByBeitritt() {
			$kantone = new Kanton();
			return $kantone->sortByBeitritt();
		}
		
	
		// --------------------- search --------------------
		public function findKantonByKuerzel($kuerzel) {
			$kantone = new Kanton();
			return $kantone->findKantonByKuerzel($kuerzel);
		}
	}
?>