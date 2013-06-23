<!doctype html>
<html>
<head>
	<title>Registered Users</title>
</head>
<body>

<h1>People on mailing list</h1>

<?php 
	if ($registered_users) {
		foreach ($registered_users as $user) {
			list($name, $email) = $user;
			echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
		}
	}
	else {
		echo "No registered users";
	}
 ?>

</body>
</html>