<?php 

$name = $_POST["name"];
$password = $_POST["password"];
$favcar = $_POST["fav-car"];
$message;
$car;


if($password != "root") {

	//header("Location: http://www.studioweb.com");
	//echo "<script> window.history.back(); </script>";
	echo "<h1 class = 'error' >Access denied, you slime ball! Fake password: $password</h1>";

	echo "<script>	alert('Wrong password! Stay away!');</script>";

	$message = "Sorry, you'll miss the show!";
} else {

	echo "<h2>The password entered: Welcome you baby of a bitch!</h2>" ; 
	echo "<script> alert('Somehow, you got in!' );</script>";
	$message = "Welcome to the show!";
}

switch ($favcar){

	case "Audi":
		$car  = "Your favorite car is Audi";
		break;
	case "Ford":
		$car  = "Your favorite car is Ford";
		break;
	case "Jeep":
		$car  = "Your favorite car is Jeep";
		break;
	default:
		$car  = "We can't believe you have this nothing $favcar! We had higher expections for you.";
		
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
	echo "<h1>$car</h1>";
	?>
	
</body>
</html>



