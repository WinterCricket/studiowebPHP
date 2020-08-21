<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditionals and the Form</title>
	<style type="text/css">
		input {display: block; margin-bottom: 10px;}
	</style>
</head>
<body>
	<h1>PHP Form Processing</h1>

	<?php include "style.php" ?>
	
	<form method="POST" action="conditionals.php">

		Name: <input type="text" name="name">
		
		Password: <input type="password" name="password">
		
		<input type="submit">
		

	</form>

</body>
</html>