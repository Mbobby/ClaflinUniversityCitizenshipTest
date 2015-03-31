<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Title -->
	<title>Quiz-Internet Technologies</title>
	<style type="text/css">
		body
		{
			font-size: 30px;
			background-image: url("background.jpg");
			color: #F5F5ED;
			text-align: center;
		}
		h1
		{
			color: #F5F5ED;
		}
		.container
		{
			background-color: #0E4378;
		}
		.navbar
		{
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<h1 class="text-center">Claflin University Citizenship Test</h1>
	</nav>
	<div class="container">
		<h1 class="text-center">Test Result</h1>

		<?php

		$fileHandle = fopen("questionsAndAnswers.txt", "r") or
		die("File does not exist or you lack permission to open it");
		$score = 0;
		$lineNumber = 0;
		while (!feof($fileHandle)) 
		{
			$lineNumber += 1;
			$line = trim(fgets($fileHandle));
			$array = explode("\t", $line);

			$questionValue = $_POST['question'.$lineNumber];
			if($questionValue == $array[5])
			{
				$score += 1;
			}
		}

		echo "You scored ".$score." point(s) out of ".$lineNumber." possible points.";
		fclose($fileHandle);
		?>
		<br>
		<br>
	</div>
</body>
</html>