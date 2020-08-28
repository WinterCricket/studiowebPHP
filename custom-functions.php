<?php 
include "style.php";
function callAName($name = "idiot"){
	echo "<h1> Hey, $name, what are you doing?</h1>";
}

function greeting($name = "moron"){
	return "<h1> You, $name, are now wed to this turnip.</h1>";
}

function hello($nameFirst = "Dill", $nameLast = "Doe"){
	return "<h1> You, $nameFirst $nameLast </h1>"."<h1>, are now wed to this turnip.</h1>";
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

 	

 	// callAName("Chelsea");
 	// greeting();
 	
 	echo greeting(hello());

 	 ?>
 	
 </body>
 </html>