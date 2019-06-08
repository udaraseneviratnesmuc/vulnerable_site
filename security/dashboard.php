<html>
	
	<head>
		<title>Dashboard</title>	
	</head>
	
	<?php

		function connectDB(){
			$servername = "localhost";
			$username = "user";
			$password = "password";
			$dbname = "security";

			$conn = mysqli_connect($servername, $username, $password,$dbname);

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			return $conn;
		}
	?>

	<body>
		
		<h1>User Registration Form</h1>
		<form method="post" action="controller/register-controller.php">
			<input type="hidden" name="action" value="register">
			<label>Username: </label>
			<input type="text" name="username"><br>
			<label>Password: </label>
			<input type="password" name="password"><br>
			<label>Role: </label>
			<select name="role">
				<option value="Administrator">Administrator</option>
				<option value="User">User</option>
			</select><br>
			<label>Name: </label>
			<input type="text" name="realName"><br>
			<label>Address: </label>
			<input type="text" name="address"><br>
			<input type="submit" value="Register">
		</form>

		<hr>
		<h1>Users</h1>
		<?php 

			$id = $_GET['id'];
			$username="";
			$role="";

			$conn = connectDB();
			$profile='';
			$sql = "SELECT * FROM user";
			error_log($sql);
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$username = $row["username"];
					$role = $row["role"];
	        		echo "ID: " . $row["id"] . "<br>";
	        		echo "Username: " . $row["username"] . "<br>";
	        		echo "Password: " . $row["password"] . "<br>";
	        		echo "Name: " . $row["name"] . "<br>";
	        		echo "Address: " . $row["address"] . "<br>";
	        		echo "Role: " . $row["role"] . "<br>";

	        		echo "---------------------------------------- <br><br>";
	    		}
			}

			$conn->close();
		?>

	</body>
</html>