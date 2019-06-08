<?php 

$action = $_POST["action"];

	switch ($action) {
		case 'save_contact':
			saveContact();
			break;

		default:
			# code...
			break;
	}


function saveContact(){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$conn = connectDB();

	$sql = "INSERT INTO contact(name, email, message) values('".$name."', '".$email . "', '". $message."')";
	error_log($sql);
	$result = $conn->query($sql);
	$conn->close();

	echo "<h1>Thank You for the message</h1>";
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