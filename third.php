<?php session_start() ?>

<?php
	//Get the first choice of the user
	$prev = $_SESSION['user']; 

	//Get the value whether player decided to switch or not
	//Switch = value = 1, No Switch = value = 2
	$choice = $_GET['myVal'];

	//Get door values by using SESSION
	$door1 = $_SESSION['door11'];
	$door2 = $_SESSION['door12'];
	$door3 = $_SESSION['door13'];

	$WIN = FALSE;
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
				<img src="
				<?php
				// Show the image for respective door
				 if($door1 == 'W'){
				 	echo "https://cfa80c9836a2fcc735f5-8694f5cc69f5ae7f5882eeca44098fe7.ssl.cf1.rackcdn.com/thumbnails/SCA665C57KUX87173/e3b14c5874e7102c46fc3daa6c82c860.jpg";
				 }
				 else{
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 }
				?>
				"/>
				<h4>Door 1</h4>
			</div>
			<div class="col">
				<img src="<?php
				//Show the image for respective door
				 if($door2 == 'W'){
				 	echo "https://cfa80c9836a2fcc735f5-8694f5cc69f5ae7f5882eeca44098fe7.ssl.cf1.rackcdn.com/thumbnails/SCA665C57KUX87173/e3b14c5874e7102c46fc3daa6c82c860.jpg";
				 }
				 else{
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 }
				?>"/>
				<h4>Door 2</h4>
			</div>
			<div class="col">
				<img src="<?php
				//Show the image for respective door
				 if($door3 == 'W'){
				 	echo "https://cfa80c9836a2fcc735f5-8694f5cc69f5ae7f5882eeca44098fe7.ssl.cf1.rackcdn.com/thumbnails/SCA665C57KUX87173/e3b14c5874e7102c46fc3daa6c82c860.jpg";
				 }
				 else{
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 }
				?>"/>
				<h4>Door 3</h4>
			</div>
		</div>
		<div class="wrapper"></div>
		<div class="result">
			<?php

			//Check if player lost or won 
			//Show a message for winning or losing 
			if($choice == '2' && $prev == 'L'){
				echo "<h2>OH! Sorry</h2>";
				echo "<h2>Not a Winner!</h2>";
			}
			else if($choice == '2' && $prev == 'W'){
				echo "<h2>Congratulations</h2>";
				echo "<h2>You are a winner.</h2>";

			}
			else if($choice == '1' && $prev == 'W'){
				echo "<h2>OH! Sorry</h2>";
				echo "<h2>Not a Winner!</h2>";
			}
			else if($choice == '1' && $prev == 'L'){
				echo "<h2>Congratulations</h2>";
				echo "<h2>You are a winner.</h2>";
			} 
			?>
			
		</div>
		<div id="rules">
<!-- 			//If player wants to play again, go to first php page -->
			<a href="first.php" onclick="post"><BUTTON class="button">PLAY AGAIN</BUTTON></a>
		</div>
	</div>
</body>
</html>