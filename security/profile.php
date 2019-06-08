<html>
	
	<head>
		<title>Profile</title>	
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
		
		<h1>Profile</h1>
		<?php 

			$id = $_GET['id'];
			$username="";
			$role="";

			$conn = connectDB();
			$profile='';
			$sql = "SELECT id,username,password,name,address,role FROM user WHERE id='".$id."'";
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
	    		}
			}

			$conn->close();
		?>
		
		<hr>
		<h3>Update Profile Info</h3>
		<form method="post" action="controller/profile-controller.php">
			<input type="hidden" name="action" value="update_profile">
			<input type="hidden" name="id" value="<?php echo($id) ?>">
			<label>Name: </label>
			<input type="text" name="realName"><br>
			<label>Address: </label>
			<input type="text" name="address"><br>
			<input type="submit" value="Update Profile">
		</form>

		<hr>
		<h3>Update Password</h3>
		<form method="post" action="controller/profile-controller.php">
			<input type="hidden" name="action" value="update_pwd">
			<input type="hidden" name="username" value="<?php echo($username) ?>">
			<label>Previous password: </label>
			<input type="password" name="pre_pwd">
			<label>New Password: </label>
			<input type="password" name="new_pwd">
			<input type="submit" value="Update">
		</form>

		<hr>
		<h3>Deactivate</h3>
		<form method="post" action="controller/profile-controller.php">
			<input type="hidden" name="action" value="deactivate">
			<input type="hidden" name="id" value="<?php echo($id) ?>">
			<input type="submit" value="Deacivate Account">
		</form>

		<?php if ($role == "Administrator") {?>
			<a href="dashboard.php">To Dashboard</a>
		<?php } ?>
	</body>
</html>