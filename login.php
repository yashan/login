

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="Login_1.css">
</head>
<body>
	<div class="header">
		<a href="index.php">App Name</a>
	</div>

	<div class="login">
		<h2>Login</h2>
		<span>or <a href="register.php">register here</a></span>
		<form action="login.php" method="post">
			<input type="text" name="Username" placeholder="Username"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" placeholder="Log In" name="Log In">
		</form>
	</div>
</body>
</html>