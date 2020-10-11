<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Arrays</title>
</head>
<body>




	<h1>PHP Arrays</h1>

	

	<?php include "style.php"; ?>	
	<h2>Indexed Array</h2>

	<?php 

		$webApps = array("weather", "stocks", "real estate", "travel");
		echo "<h3>Here is the web app category we're building this week: $webApps[0]</h3><br>";
		$appCount = count($webApps);

		for($x = 0; $x < $appCount; $x++){
				echo "<h4>$webApps[$x] </h4><br>";
		}

		echo "<h3>Total number of projects in web app queue: $appCount</h3>";
	 ?>
<h2>Associative Array</h2>
	<?php 

		$assocArray = array("Dog" => "sleeps", "Cat" => "drives", "Person" => "feeds animals");

		$animal = $assocArray['Person'];

		echo "<h3>Here is the animal with its attribute:  $animal .</h3><br>";


	 ?>
	

	
	
</body>
</html>