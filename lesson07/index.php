<!DOCTYPE html>
<?php
	/**
	 * Includes, requires
	 */
	require_once("includes/ToDoHandler.class.php");

	// check for action
	if (isset($_POST['subject'])) {
		$dbHandler = new ToDoHandler();
		$dbHandler->addToDo(htmlspecialchars($_POST['subject']));
	} else if (isset($_GET['edit'])) {
		echo "edit" . $_GET['edit'];
		// go back to home!
		header("Location: edit.php?oid=" . $_GET['edit']);
	} else if (isset($_GET['delete'])) {
		$db_handler = new ToDoHandler();
		$db_handler->deleteToDo($_GET['delete']);
		// go back to home!
		header("Location: index.php");
	}
?>
<html>
<head>
	<title>Welcome to your ToDo list</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/todo.css" rel="stylesheet" media="screen">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
		/**
		 * function which calls a php script to complete the selected ToDo.
		 */
		function markCompleted(oid, alreadyCompleted) {
			var updateRequest = $.get("complete.php?oid=" + oid + "&completed=" + alreadyCompleted);
			updateRequest.always(function () {
				location.reload();
			});
		}
	</script>

	<div class="container">
		<!-- always show the 'add new todo' input -->
		<form action="" class="form-inline" method="POST">
			<p>		
				<label for="subject">Add new</label>
				<input type="text" name="subject" />
				<input type="submit" class="btn btn-primary" value="create" />
			</p>
		</form>

		<h1>
			ToDos:
		</h1>
	
		<?php
			$db_handler = new ToDoHandler();
			$todos = $db_handler->listToDos();
	
			echo "<table class='table'>";
			// print the values
			foreach ($todos as $row) {
				$oid = $row["OID"];
				$text = $row["text"];
				$completed = $row["completed"];
				echo "<tr>";

				// completed
				if ($completed === '0') {
					echo "<td><input type='checkbox' onclick='markCompleted(" . $oid . ", " . $completed . ")' name='completed' value='" . $oid . "' ></td>";
				} else {
					echo "<td><input type='checkbox' onclick='markCompleted(" . $oid . ", " . $completed . ")' name='completed' value='" . $oid . "' checked></td>";
				}

				// text
				if ($completed === '0') {
					echo "<td id='" . $oid . "'>" . $text . "</td>";
				} else {
					echo "<td id='" . $oid . "' class='completed'>" . $text . "</td>";
				}

				// links for edit and delete
				echo "<td><a href='?edit=" . $oid . "'>edit</a></td>";  
				echo "<td><a href='?delete=" . $oid . "'>delete</a></td>";

				echo "</tr>";
			}
			echo "</table>";
		?>
	</div>
</body>
</html>