<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Loops</title>
</head>
<body>
	<h1>PHP Loops</h1>
	<?php 

	include "style.php";

		//for loop

	for ($i = 0; $i < 5; $i++){
		//echo "<h3>I promise not to do whatever ... $i</h3>";
	}

	//while loop

	$x =0;
	while ($x <= 5) {
		//echo "<h3>the while ... $x</h3>";
		$x++;
	}

	//for each loop - just for arrays
	$records = array("Houses of the Holy", "Hathaway Live", "Dark Side of the Moon", "When Pa Lived");
	foreach ($records as $value) {
		echo "<h3>$value </h3>";
	}


	?>
	
	
</body>
</html>