<?php 
include "style.php";
sesstion_start()


if(isset($_$SESSION['isLoggedIn'])) {
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
 	<title>form processing - protected page</title>
 </head>
 <body>
 	
 </body>
 </html>