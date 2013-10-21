<?php
	/**
	 * Includes, requires
	 */
	require_once("includes/ToDoHandler.class.php");

	$oid = htmlspecialchars($_GET["oid"]);
	$completed = htmlspecialchars($_GET["completed"]);
	
	if (isset($oid) && isset($completed)) {
		$db_handler = new ToDoHandler();
		$db_handler->completeToDo($oid, $completed);
		// go back to home!
		header("Location: index.php");
	}
?>