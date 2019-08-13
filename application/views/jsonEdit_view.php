<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>

	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
</head>
<body>
	<form method="POST" action="jsonEdit/editData">
		<div class="container">
			<?php foreach ($dataArray as $key => $value): ?>
				<hr>
				<label for="name">Name: </label>
				<input type="text" name="name[]" value="<?php echo $value['name'] ?>">
				<label for="name">Phone: </label>
				<input type="text" name="phone[]" value="<?php echo $value['phone'] ?>">
				
			<?php endforeach ?>
			<div class="container">
				<input type="submit" value="New data" class="btn btn-success">
			</div>
			
		</div>
	</form>
</body>
</html>