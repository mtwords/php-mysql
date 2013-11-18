<?php
	/**
	 * Static class for handling Kantone
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
			usort($kantone->getIterator(), function($a, $b) {
				if ($a['Kanton'] == $b['Kanton']) {
					return 0;
				}
				return ($a['Kanton'] < $b['Kanton']) ? -1 : 1;
			});
			return $kantone;
		}

		public function sortByHauptort() {
			$kantone = new Kanton();
			usort($kantone, function($a, $b) {
				if ($a['Hauptort'] == $b['Hauptort']) {
					return 0;
				}
				return ($a['Hauptort'] < $b['Hauptort']) ? -1 : 1;
			});
			return $kantone;
		}
		
		public function sortByEinwohner() {
			$kantone = new Kanton();
			usort($kantone, function($a, $b) {
				if ($a['Einwohner 1'] == $b['Einwohner 1']) {
					return 0;
				}
				return ($a['Einwohner 1'] < $b['Einwohner 1']) ? -1 : 1;
			});
			return $kantone;
		}
	
		public function sortByBeitritt() {
			$kantone = new Kanton();
			usort($kantone, function($a, $b) {
				if ($a['Beitritt'] == $b['Beitritt']) {
					return 0;
				}
				return ($a['Beitritt'] < $b['Beitritt']) ? -1 : 1;
			});
			return $kantone;
		}
		
	
		// --------------------- search --------------------
		public function findKantonByKuerzel($kuerzel) {
			$kantone = new Kanton();
			$iterator = $kantone->getIterator();
			foreach ($iterator as $kanton) {
				if ($kuerzel === strtolower($kanton['Kuerzel'])) {
					return $kanton;
				}
			}
			return null;
		}
	}
?>