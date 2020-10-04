<?php 
include "style.php";
session_start();

session_unset();

session_destroy();

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>form processing - protected page</title>
 </head>
 <body>
 	<h1>Writer Club Login</h1>

	<nav>
		<ul>
			<li><a href="php-login.php">Home</a></li>
			<li><a href="protected-page.php">Protected page</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
	</nav>

	<main>
		<h2 style="background-color: tomato;" >You are logged out!</h2>
	</main>
 	
 </body>
 </html>