<?php 

function callAName($name = "idiot"){
	echo "<h1> Hey, $name, what are you doing?";
}

function greeting($name = "moron"){
	return "<h1> You, $name, are now wed to this turnip.";
}

function hello($nameFirst = "Dill", $nameLast = "Doe"){
	return "<h1> You, $nameFirst $nameLast, are still married to a turnp";
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>PHP Custom Functions</title>
 </head>
 <body>
 	<h1>PHP Custom Functions</h1>
 	<?php 
 	include "style.php";
 	

 	// callAName("Chelsea");
 	// greeting();
 	
 	echo greeting(hello());

 	 ?>
 	
 </body>
 </html>