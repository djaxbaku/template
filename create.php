<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
		input{
			margin: 10px;
			width: 1000px;
			height: 100px;
			line-height: 100px;

		}
	</style>
</head>
<body>
	<div class="container">
	<form action="upload.php" method="POST">
	<input type="text" name="header" cols="40" placeholder="header"> <br>
	<input type="text" name="title" placeholder="title"> <br>
	<input type="text" name="text" placeholder="text"> <br>
	<input type="file" name="img"> <br>
	<input type="submit" name="submit" value="CONFIRM">
	</form>
	</div>


</body>
</html>