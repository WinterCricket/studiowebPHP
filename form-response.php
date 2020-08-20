<!DOCTYPE html>
<html>
	<head>
		<title>Form Response PHP</title>
	
	</head>
	<body>

		<h1>PHP Form Processing Here</h1>

		<?php

		/*
			There are a bunch of predefined (precreated) variables in PHP that are called" "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, 
			class or file without having to do anything special.

			Note: classes are basically objects, and these are packages of code that contain funtions, variables and more. 

			The PHP superglobal variables are:

		    $GLOBALS
		    $_SERVER
		    $_REQUEST
		    $_POST
		    $_GET
		    $_FILES
		    $_ENV
		    $_COOKIE
		    $_SESSION

		    To process forms, we use $_POST and $_GET

		reference: http://www.w3schools.com/php/php_superglobals.asp

		*/

		include "style.php";

		echo "The name entered: " . $_POST["name"];
		echo "<br>The password entered: " . $_POST["password"];

		?>

		
	</body>
</html>