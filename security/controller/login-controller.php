<?php 

$action = $_POST["action"];

	switch ($action) {
		case 'login':
			login();
			break;

		case 'update_pwd':
			updatePwd();
			break;

		default:
			# code...
			break;
	}


function login(){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$conn = connectDB();
	
	$sql_username = "SELECT id FROM user WHERE username='".$username."'";
	$result_username = $conn->query($sql_username);

	if ($result_username->num_rows > 0) {
		$sql = "SELECT id,username,password FROM user WHERE username='".$username."' and password='".$password."'";
		error_log("Login SQL command : " . $sql);
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				header("Location: ../profile.php?id=".$row["id"]);
			}
		} else {
		    echo "<h1>Access Denied</h1>";
		}
	} else {
	    echo "<h1>Invalid Username<h1>";
	}

	

	$conn->close();
}


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