 <?php 
 	session_start()
 ?> 
 
<?php
	
	//Creating an array to store three values 2 Losers 'L' and 1 Winner 'W'
 	$arr = $result = array('W','L','L');
 	shuffle($result);	//Shuffling the position of the items on array

 	//Taking one value from array
 	//storing it in a variable
 	//creating a session for the variable to use in next php file
 	//removing that value from array to avoid duplicates
 	$val1 = array_rand($result,1);
 	$door1 = $result[$val1];
 	$_SESSION["door1"] = $door1;
 	unset($result[$val1]);

	$val2 = array_rand($result,1);
 	$door2 = $result[$val2];
	$_SESSION["door2"] = $door2;
	unset($result[$val2]); 	

 	$val3 = array_rand($result,1);
 	$door3 = $result[$val3];
 	$_SESSION["door3"] = $door3;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Monty Hall Show</title>
	<link rel="stylesheet" type="text/css" href="monty.css">
</head>
<body>
	<div class="main">
		<div class="wrap">

			<h1 class="h1">Monty Hall Show</h1>
			
		</div>
		<div class="row">
			<div class="col">
				<!-- 
				//Go to next php file and send value 1, 2, or 3 when user 
				//clicks on door1, door2, or door3  -->
				<a href="second.php?myVar=1" onclick="post"><img src="http://www.54reddoor.uk/images/Door-bare-158x360b.png"/></a>
				<h4>Door 1</h4>
			</div>
			<div class="col">
				<a href="second.php?myVar=2" onclick="post"><img src="http://www.54reddoor.uk/images/Door-bare-158x360b.png"/></a>
				<h4>Door 2</h4>
			</div>
			<div class="col">
				<a href="second.php?myVar=3" onclick="post"><img src="http://www.54reddoor.uk/images/Door-bare-158x360b.png"/></a>
				<h4>Door 3</h4>
			</div>
		</div>
		<div class="wrapper"></div>
		<div id="select">
			<h2>Select Your Door</h2>
		</div>
		<div id="rules">
			<h3>Rules of the Game</h3>
			<p>You're on a game show, and you're given the choice of three doors: Behind one door is a car; behind the others, goats. You pick a door, say No. 1, and the host, who knows what's behind the doors, opens another door, say No. 3, which has a goat. He then says to you, "Do you want to pick door No. 2?" You have the option to switch or not. After your choice, your choosen door is opened and you would find out if you win or not.</p>
		</div>
	</div>
</body>
</html>