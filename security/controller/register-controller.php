<?php 

$action = $_POST["action"];

	switch ($action) {
		case 'register':
			register();
			break;

		default:
			# code...
			break;
	}


function register(){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$role = $_POST["role"];
	$real_name = $_POST["realName"];
	$address = $_POST["address"];

	$conn = connectDB();

	$sql = "INSERT INTO user(username, password, name, address, role) values('".$username."', '".$password . "', '". $role."', '".$real_name."', '".$address."')";
	error_log($sql);
	$result = $conn->query($sql);
	$conn->close();
	header("Location: ../dashboard.php");
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