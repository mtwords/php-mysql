<!DOCTYPE html>
<?php
	/**
	 * Includes, requires
	 */
	require_once("includes/ToDoHandler.class.php");

	// check for action
	if (isset($_POST['edited_subject'])) {
		$db_handler = new ToDoHandler();
		$db_handler->updateToDo(htmlspecialchars($_GET['oid']), $_POST['edited_subject']);
		// go back to home!
		header("Location: index.php");
	}
	if (!isset($_GET['oid'])) {
		// go back to home!
		header("Location: index.php");
	}
?>
<html>
<head>
	<title>Edit a ToDo</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/todo.css" rel="stylesheet" media="screen">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<form action="" class="form-inline" method="POST">
		<p>
			<label for="subject">Edit ToDo:</label>
		</p>

		<p>
			<?php
				$oid = htmlspecialchars($_GET['oid']);
				$db_handler = new ToDoHandler();
				$todo = $db_handler->getToDo($oid);

				echo "<input type='text' name='edited_subject' value='" . $todo[0]["text"] . "' />";
			?>
			<input type="submit" class="btn btn-primary" value="save" />
		</p>
	</form>

</body>
</html>
