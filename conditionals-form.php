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
		
		
		
		Favorite car:<br> 
		<select name="fav-car">
		  <option value="volvo">Volvo</option>
		  <option value="saab">Saab</option>
		  <option value="mercedes">Mercedes</option>
		  <option value="Audi">Audi</option>
		  <option value="Ford">Ford</option>
		  <option value="Jeep">Jeep</option>
		  <option value="Some crappy card brand">Some crappy car brand</option>
		</select>

		<input type="submit">

		

	</form>

</body>
</html>