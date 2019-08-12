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
				</div>
			</div>
		<?php endforeach ?>
		
	</div>
</body>
</html>