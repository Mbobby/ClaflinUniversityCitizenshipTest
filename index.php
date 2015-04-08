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
		.question
		{
			background-color: #A4BFC4;
			margin-bottom: 20px;
		}
		body
		{
			background-color: #BAC4C0;
			color: #F5F5ED;

		}
		h1
		{
			color: #F5F5ED;
			font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
		}
		legend
		{
			color: #F5F5ED;
		}
		.navbar
		{
			background-color: #B3BCB9;
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
	<nav class="navbar navbar-custom">
		<h1 class="text-center">Claflin University Citizenship Test</h1>
	</nav>
		<form class="form-horizontal" onsubmit="onSubmitConfirm();" method="post" action="check.php">
			<?php include 'initialize.php';?>
			<button type="submit" class="btn btn-primary col-sm-4 col-md-offset-4">Submit</button>
		</form>
		<br>
		<br>
</body>
</html>