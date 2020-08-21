<?php 

$name = $_POST["name"];
$password = $_POST["password"];
$message;

if($password != "root") {
	echo "<h1 class = 'error' >Access denied, you slime ball!</h1>";
	echo "<script>	alert('Wrong password! Stay away!');</script>";

	$message = "Sorry, you'll miss the show!";
} else {

	echo "<h2>The password entered: Welcome you baby of a bitch!</h2><br>" ; 
	echo "<script> alert('Somehow, you got in!' );</script>";
	$message = "Welcome to the show!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditionals</title>
</head>
<body>
	<h1>PHP Conditionals and Form Processing</h1>

	<?php 
	include "style.php";
	echo "<h1>$message</h1>"; 
	?>
	
</body>
</html>



