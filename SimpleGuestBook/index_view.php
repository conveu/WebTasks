<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta charset="cp1251">
	<title><?php echo $config['title']; ?></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($messages as $key => $value) { ?>
			<div class="col-md-12">
				<h3><?php echo $value['name']; echo $value['email'];?></h3>
				<p><?php echo $value['message']; ?></p>
				<p><?php echo $value['date']; ?></p>



			</div>
			<?php } ?>
		</div>
	</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form method="post" action="/tpl/add.php">
				<input type="text" name="name" placeholder="Name">
				<input type="email" name="email" placeholder="Email">
				<textarea name="message" placeholder="Message"></textarea>
				<input type="submit">
			</form>
			
		</div>
	</div>

	</div>





</body>
</html>