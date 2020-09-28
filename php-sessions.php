
<?php 

include "style.php";
 session_start();//superglobal to maintain state

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sessions</title>
</head>
<body>

	<?php 

		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "raven";
		echo "<h4>Session variables are set.</h4>";

	 ?>

	<h1>PHP Sessions</h1>

	<h2>PHP sessions allow you to track people</h2>
	<a href="http://localhost:81/studiowebPHP/php-sessions-view.php">View Sessions</a>



	
</body>
</html>