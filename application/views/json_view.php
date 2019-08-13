<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View json result</title>

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
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