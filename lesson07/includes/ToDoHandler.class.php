<?php
	/**
	 * DAO for ToDos.
	 * 
	 * Offers CRUD stuff...
	 */
	class ToDoHandler {
		const hostname = "localhost";
		const username = "root";
		const password = "password";

		/**
		 * returns the connection as a PDO Object
		 */
		private function getConnection() {
			$db_handler = new PDO('mysql:host=' . self::hostname . ';dbname=todo', self::username, self::password);
			$db_handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db_handler;
		}

		/**
		 * Adds a new todo
		 */
		function addToDo($subject) {
			try {
				// init the connection
				$db_handler = self::getConnection();

				// insert statement for the new ToDo
				$sql = "INSERT INTO todos(text) values('" . $subject . "');";

				// execute the statement
				$db_handler->exec($sql);
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}

		/**
		 * Lists all ToDos
		 */
		function listToDos() {
			try {
				// init the connection
				$db_handler = self::getConnection();

				// select statement for all ToDos
				$sql = "SELECT * FROM todos;";

				// execute the statement
				$result = $db_handler->query($sql);
				return $result->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}

		function getToDo($oid) {
			try {
				// init the connection
				$db_handler = self::getConnection();

				// select statement for specific ToDos
				$sql = "SELECT * FROM todos where OID = " . $oid . ";";

				// execute the statement
				$stmt = $db_handler->query($sql);
				return $stmt->fetchAll(PDO::FETCH_ASSOC);
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}

		function updateToDo($oid, $text) {
			try {
				// init the connection
				$db_handler = self::getConnection();

				// select statement for all ToDos
				$sql = "UPDATE todos SET text = ? where OID = ?;";

				// execute the statement
				$stmt = $db_handler->prepare($sql);
				return $stmt->execute(array($text, $oid));
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}

		/**
		 * complete an existing ToDo.
		 * 
		 * $state represents the actual (!!!) state of the ToDo.
		 * This will be inverted in the function!
		 */
		function completeToDo($oid, $state) {
			try {
				// $state represents
				$completed = $state === '0' ? '1' : '0';
				// init the connection
				$db_handler = self::getConnection();

				// select statement for all ToDos
				$sql = "UPDATE todos SET completed = ? where OID = ?;";

				// execute the statement
				$stmt = $db_handler->prepare($sql);
				return $stmt->execute(array($completed, $oid));
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}

		function deleteToDo($oid) {
			try {
				// init the connection
				$db_handler = self::getConnection();

				// select statement for all ToDos
				$sql = "DELETE FROM todos where OID = ?;";

				// execute the statement
				$stmt = $db_handler->prepare($sql);
				return $stmt->execute(array($oid));
			} catch (PDOException $ex) {
				echo $ex->getMessage();
			}
		}
	}
?>