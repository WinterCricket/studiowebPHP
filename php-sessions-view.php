<?php 

	include "style.php";

	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sessions View</title>
</head>
<body>
	<h1>PHP Sessions View</h1>

	<?php 
		

		echo "<h1 class = 'joiner'>Favorite color is </h1>". $_SESSION["favcolor"]. "<h1 class = 'joiner'>.</h1>";
		echo "<h1 class = 'joiner'>Favorite animal is </h1>". $_SESSION["favanimal"] . "<h1 class = 'joiner'>.</h1>";

	 ?>
</body>
</html>