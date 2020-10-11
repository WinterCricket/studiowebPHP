<?php 
include "simplestyle.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.php"> -->
	<title>form processing</title>
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


<?php 
	if(isset($session['isLoggedIn'])) {
		//if the user logged in, don't show form and confuse them
		echo "<p>You are logged in.</p>";
	} else{
		//using Heredoc to echo out form
$theForm = <<<THEFORM

<h2>Welcome to Writer Club </h2>
<h2>Please enter user name and password to log in:</h2>

<form method = "post" action="login-response.php">

<input type="text" name = "userName" id = "username">
<input type="password" name = "password">
<input type="submit">
</form>
THEFORM;

echo $theForm;

		}

		?>




<?phphttp://localhost:81/studiowebPHP/php-login.php
			//using the querystring to return messages to this page




if(isset($_GET["isBlock"])){
	$isBlock = $_GET["isBlock"];
	echo "<h2>You haven't logged in!</h2>";
	echo "<script>document.getElementById('username').focus();</script>";
} else if(isset($_GET["badUserCredentials"])){

	$badUserCredentials = $_GET["badUserCredentials"];
	echo "<h2>User name OR password is wrong!</h2>";
	echo "<script>document.getElementById('username').focus();</script>";
}

?>

</main>
</body>
</html>
