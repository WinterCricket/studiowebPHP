<?php 

	include "style.php";

	// include "php-session.php";

	session_start();


	//set session vars

	$_SESSION["favcolor"] = "cerulean";
	$_SESSION["favanimal"] = "winged kittens";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Sessions Set amd View</title>
</head>
<body>
	<h1>PHP Sessions Set and View</h1>

	<h2>Session variables created, now let's look at them</h2>

	<?php 

		echo "<h1 class = 'joiner'>Favorite color is </h1>". $_SESSION["favcolor"]. "<h1 class = 'joiner'>.</h1>";
		echo "<h1 class = 'joiner'>Favorite animal is </h1>". $_SESSION["favanimal"] . "<h1 class = 'joiner'>.</h1>";
		

	 ?>

<h2>View Session with print_r</h2>

<?php 

	print_r($_SESSION);
 ?>
 <H2>Reset session bariables</H2>

 <?php 

 	$_SESSION["favcolor"] = "sand";
	$_SESSION["favanimal"] = "legged bi-valves";

	echo "New session variable value: ";
	print_r($_SESSION);
  ?>
  <h2>Destroy session variables</h2>
  <?php 

  	//remove all session vars
  session_unset();

  //destroy the session
  session_destroy();

  echo "<h1>Session destroyed</h1>";

  print_r($_SESSION);
   ?>
   <h2>Use session in a variable in a conditional statement</h2>

   <?php 

   	$_SESSION["favcar"] = "Camry";

   	//unset($_SESSION["favcar"]);

   	if(isset($_SESSION["favcar"])){
   		echo "Car has been SET! It is: " . $_SESSION["favcar"];
   	} else {
   		echo "Car has not been SET.";
   		$_SESSION["isAnswered"] = "No";
   	}

    ?>

    <h2>Check in the session with print-r</h2>

    <?php 
    print_r($_SESSION);


     ?>

</body>
</html>