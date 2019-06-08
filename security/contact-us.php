<html>
	
	<head>
		<title>Security</title>	
	</head>
	

	<body>
		
		<h1>Contact Us</h1>
		<form method="post" action="controller/contact-us-controller.php">
			<input type="hidden" name="action" value="save_contact">
			<label>Name: </label>
			<input type="text" name="name">
			<label>E-Mail: </label>
			<input type="text" name="email">
			<label>Message: </label>
			<input type="text" name="message">
			<input type="submit" value="Submit">
		</form>

		<br>

		<a href="contact-us.php">Contact Us</a>

	</body>
</html>