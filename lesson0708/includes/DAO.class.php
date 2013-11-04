<?php
	class DAO {
		const hostname = "localhost";
		const username = "root";
		const password = "password";
		const table = "tbl_person";

		/**
		 * returns the connection as a PDO Object
		 */
		protected function getConnection() {
			$db_handler = new PDO('mysql:host=' . self::hostname . ';dbname=loc_orm', self::username, self::password);
			$db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db_handler;
		}
	}
?>