<!doctype html>
<html>
<head>
	<title>Email Registration</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Email Registration</h1>

	<div id="status"><?php if (isset($status)) echo $status; ?></div>

	<form action="" method="post" accept-charset="utf-8">
		<ul>
			<li>
				<label for="name=">Name</label>
				<input type="text" name="name" value="<?= old('name'); ?>">
			</li>

			<li>
				<label for="email">Email</label>
				<input type="email" name="email" value="<?= old('email'); ?>">
			</li>

			<li>
				<input type="submit" value="Submit">
			</li>
		</ul>
	</form>	
</body>
</html>