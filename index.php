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
	<style type="text/css">
		.form
		{
			background-color: #0E4378;
		}
		body
		{
			/*background-color: #FAFAF5;*/
			background-image: url("background.jpg");
			color: #F5F5ED;
		}
		h1
		{
			color: #F5F5ED;
		}
		legend
		{
			color: #F5F5ED;
		}
		.navbar
		{
			padding: 0;
			margin: 0;
		}
	</style>
	<script type="text/javascript">
		function onSubmitConfirm()
		{
			confirm("Are sure that you have completed the quiz?");
		}
	</script>

	<!-- Title -->
	<title>Quiz-Internet Technologies</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<h1 class="text-center">Claflin University Citizenship Test</h1>
	</nav>
	<div class="col-sm-10 col-md-offset-1 form">
		<form class="form-horizontal" onsubmit="onSubmitConfirm();" method="post" action="check.php">
			<?php include 'initialize.php';?>
			<button type="submit" class="btn btn-primary col-sm-4 col-md-offset-4">Submit</button>
		</form>
		<br>
		<br>
	</div>
</body>
</html>