<html>
	
	<head>
		<title>Security</title>	
	</head>
	

	<body>
		
		<h1>Login Form</h1>
		<form method="post" action="controller/login-controller.php">
			<input type="hidden" name="action" value="login">
			<label>Username: </label>
			<input type="text" name="username">
			<label>Password: </label>
			<input type="password" name="password">
			<input type="submit" value="Login">
		</form>

		<br>

		<a href="contact-us.php">Contact Us</a>

	</body>
</html>