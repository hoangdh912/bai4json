<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View json result</title>
</head>
<body>
	<div class="container">

		<?php foreach ($resultArray as $key => $value): ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Name: <?php echo $value->name; ?></h4>
					<p class="card-text">Phone: <?php echo $value->phone; ?></p>
					<a href="json/deleteData/<?php echo $value->phone; ?>" class="btn btn-success">Delete</a>
				</div>
			</div>
		<?php endforeach ?>
		
	</div>

	<div class="container">
		<form method="POST" action="json/addData">
			<label for="name">Name: </label>
			<input type="text" name="name">
			<label for="name">Phone: </label>
			<input type="text" name="phone">
			<input type="submit" value="New data">
		</form>
	</div>

</body>
</html>