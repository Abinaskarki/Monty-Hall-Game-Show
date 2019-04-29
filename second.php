<?php session_start() ?>

<?php 
	
	//Getting the values of door through SESSIONS
	//Creating the another session of same variable to use in another php file
	$door1 = $_SESSION['door1'];
	$_SESSION["door11"] = $door1;
	
	$door2 = $_SESSION['door2'];
	$_SESSION["door12"] = $door2;
	
	$door3 = $_SESSION['door3'];
	$_SESSION["door13"] = $door3;
	
	//Initializing a bool as false
	$bool = FALSE;

	//Get the value of door clicked by user 
	$value = $_GET['myVar'];

	//Check if user clicked value is 1,2,or 3
	//Create session for it as user
	if($value == '1'){
		$_SESSION["user"] = $door1;	
	}
	else if($value == '2'){
		$_SESSION["user"] = $door2;
	}
	else{
		$_SESSION["user"] = $door3;	
	}
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

				//Check if door is not clicked by user
				//If not clicked, check if it is a winner
				//If not winner, display goat image
				//Mark 'bool' as true to avoid duplicates
				 if($value != '1' && $door1 == 'L' && $bool == FALSE){
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 	$bool = TRUE;
				 }
				 else{
				 	echo "http://www.54reddoor.uk/images/Door-bare-158x360b.png";
				 }
				?>
				"/>
				<h4>Door 1</h4>
			</div>
			<div class="col">
				<img src="<?php


				//Check if door is not clicked by user
				//If not clicked, check if it is a winner
				//If not winner, display goat image
				//Mark 'bool' as true to avoid duplicates
				 if($value != '2' && $door2 == 'L' && $bool == FALSE){
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 	$bool = TRUE;
				 }
				 else{
				 	echo "http://www.54reddoor.uk/images/Door-bare-158x360b.png";
				 }
				?>"/>
				<h4>Door 2</h4>
			</div>
			<div class="col">
				<img src="<?php

				
				// Check if door is not clicked by user
				// If not clicked, check if it is a winner
				// If not winner, display goat image
				// Mark 'bool' as true to avoid duplicates
				 if($value != '3' && $door3 == 'L' && $bool == FALSE){
				 	echo "https://i.pinimg.com/236x/63/9f/ac/639fac617de60c05cb1e9e4daf9972e2--funny-goat-pictures-dog-shaming-pictures.jpg";
				 	$bool = TRUE;	
				 }
				 else{
				 	echo "http://www.54reddoor.uk/images/Door-bare-158x360b.png";
				 }
				?>"/>
				<h4>Door 3</h4>
			</div>
			<br>
		</div>
		<div class="wrapper"></div>
		<div id="select">
			<h2>Do You Want To Switch to Other Unopened Door</h2>
			<div class="row1">
<!-- 				//Go to next php file and send value 1 or 2when user 
				//clicks on YES or NO to switch or not  -->
				<div class="col1"><a href="third.php?myVal=1" onclick="post"><BUTTON class="button">YES</BUTTON></a></div>
				<div class="col2"><a href="third.php?myVal=2" onclick="post"><BUTTON class="button">NO</BUTTON></a></div>
			</div>
		</div>
		<br>
	</div>
</body>
</html>
