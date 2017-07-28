<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="Login_1.css">
</head>
<body>
	<div class="header">
		<a href="index.php">App Name</a>
	</div>

	<div class="register">
		<h2>Register</h2>
		<span>or <a href="login.php">login here</a></span>
		<form action="Login_1.php" method="post">
			<input type="text" name="Username" placeholder="Username"><br>
			<input type="email" name="Email" placeholder="Your Email"><br>
			<input type="password" name="password" placeholder="Chosen Password"><br>
			<input type="password" name="npassword" placeholder="Confirm Password"><br>
			<input type="submit" name="">
		</form>
	</div>
</body>
</html>