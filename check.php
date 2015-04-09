<?php

	if ($_SERVER['REQUEST_METHOD'] !== 'POST') 
	{
		header('Location: '.'index.php');
	}
?>
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
			color: #F5F5ED;
			text-align: center;
			background-color: #BAC4C0;
			font-family: "Times New Roman", Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
		}
		h1
		{
			color: #F5F5ED;
			font-size: 35px;
			font-family: "Times New Roman", Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
		}
		.container
		{
			/*background-color: #0E4378;*/
			background-color: #A4BFC4;
			margin-bottom: 20px;
		}
		.navbar
		{
			background-color: #B3BCB9;
		}
		h2
		{
			font-size: 30px;
			font-family: "Times New Roman", Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		hr
		{
			line-height: 30px;
			color: red;
			background-color: red;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-custom">
		<h1 class="text-center">Claflin University Citizenship Test</h1>
	</nav>
	<div class="container">
		<h2 class="text-center">Result</h1>

		<?php

		$fileHandle = fopen("questionsAndAnswers.txt", "r") or
		die("File does not exist or you lack permission to open it");
		$score = 0;
		$lineNumber = 0;
		$correction = "";
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
			else
			{
				$correction .= "<div class=\"container\"></h3>".$array[0]."</h3><br> Correct: ".$array[5]."</div>";
			}
		}
		$passedPrecentage = ($score/$lineNumber ) * 100;
		$failedPrecentage = (($lineNumber - $score)/$lineNumber) * 100;
		echo "<div class=\"progress\">";
  		echo "<div class=\"progress-bar progress-bar-success\" style=\"width: ".$passedPrecentage."%\">";
    	echo "<span class=\"sr-only\">".$passedPrecentage."% Complete (success)</span>";
  		echo "</div>";
  		echo "<div class=\"progress-bar progress-bar-danger\" style=\"width: ".$failedPrecentage."%\">";
    	echo "<span class=\"sr-only\">".$failedPrecentage."% Complete (danger)</span>";
  		echo "</div>";
		echo "</div>";

		echo "You scored ".$score." point(s) out of ".$lineNumber." possible points.";
		fclose($fileHandle);
		?>
		<hr/>
	</div>
		<?php 
			if(strlen($correction) > 0)
			{
				echo "<h2>Correction</h2>";
				echo $correction;
			}
		?>
</body>
</html>