<?php
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TO DO List</title>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/site.css">
	</head>
	<body>
		<h1 class="header">TO DO List</h1>
			<ul>
				<li>Sweep tile</li>
				<li>Wash dishes</li>
				<li>Take out the garbage</li>
			</ul>
			<br>
			<br>
			<br>
			<br>
		<h2 class="header">Add an Item to the List</h2>
			<form method="POST" action="/todo_list.php" class="header">
				<label for="todo_list">Enter an item to add:
					<input id="todo_list" name="added item:" type="text">
				</label>
				<input id="addButton" type="submit" value="Add">
			</form>
	</body>
</html>
