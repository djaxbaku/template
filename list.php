<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>HEADER</th>
				<th>TITLE</th>
				<th>TEXT</th>
				<th>IMG</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		include "db.php";
				 $sql="SELECT * FROM `news`";
	 $query=mysqli_query($connect,$sql);
		
	 while ($row=mysqli_fetch_assoc($query)) {
	 	?>
	 	<tr>
	 	<?php
	foreach ($row as $key => $value) {
		echo "<td>";
		echo $value;
		echo "</td>";
		
	}
		
	 }
		
		?></tr>
		</tbody>
	</table>
	<form action="create.php">
	<input type="submit" name="create" value="Create New">
	</form>
</div>
</body>
</html>