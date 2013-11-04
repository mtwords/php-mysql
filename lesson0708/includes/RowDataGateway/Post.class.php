<?php

/**
 * Class for the Row Data Gateway Pattern
 */
class Post extends DAO {
	// members
	var $id;
	var $title;
	var $content;
	var $created;

	// ------------- Data access methods -------------
	/**
	 * Loads a post object by id.
	 */
	public function findById($id) {
		
	}

	/**
	 * creates a records with the data from this object.
	 */
	public function insert() {
		try {
			// init the connection
			$db_handler = parent::getConnection();

			// insert statement
			$sql = "INSERT INTO tbl_person(title, content) values(?, ?);";

			// execute the statement
			$stmt = $db_handler->prepare($sql);
			return $stmt->execute(array($this->title, $this->content));
		} catch (PDOException $ex) {
			echo $ex->getMessage();
		}
	}

	/**
	 * updates a records with the data from this object.
	 */
	public function update() {
		
	}

	/**
	 * deletes a records with the data from this object.
	 */
	public function delete() {
		
	}
}

?>