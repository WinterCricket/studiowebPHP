<?php 
include "style.php";
session_start();


if(isset($_SESSION['isLoggedIn'])) {
	//do nothing--user logged in
} else {
	header('Location: php-login.php?isBlock=true');
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- <link rel="stylesheet" href="style.php"> -->
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
		<h3>You are now viewing members only content! You're on the inside of Writer Club!</h3>
	</main>
 	
 </body>
 </html>