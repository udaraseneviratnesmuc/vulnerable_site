<?php 

	$action = $_POST["action"];

	switch ($action) {

		case 'update_pwd':
			updatePwd();
			break;

		case 'deactivate':
			deactivateProfile();
			break;

		case 'update_profile':
			updateProfile();
			break;

		default:
			# code...
			break;
	}

function updatePwd(){
	$username = $_POST["username"];
	$pre_pwd = $_POST["pre_pwd"];
	$new_pwd = $_POST["new_pwd"];

	$conn = connectDB();
	$sql = "UPDATE user SET password='".$new_pwd."' WHERE password='".$pre_pwd."' AND username='".$username."'";
	error_log($sql);
	$result = $conn->query($sql);

	echo "<h1>Password Updated</h1>";

	$conn->close();
}

function updateProfile(){
	$id = $_POST["id"];
	$real_name = $_POST["realName"];
	$address = $_POST["address"];

	$conn = connectDB();
	$sql = "UPDATE user SET name='".$real_name."', address='".$address."' WHERE id='".$id."'";
	error_log($sql);
	$result = $conn->query($sql);

	echo "<h1>Profile Updated</h1>";

	$conn->close();
}

function deactivateProfile(){
	$id = $_POST["id"];

	$conn = connectDB();
	$sql = "UPDATE user SET status='INACTIVE' WHERE id='".$id."'";
	error_log($sql);
	$result = $conn->query($sql);

	$conn->close();

	header("Location: ../index.php");
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