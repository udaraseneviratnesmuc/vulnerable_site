<?php

	$action = $_POST["action"];

	switch ($action) {
		case 'login':
			login();
			break;
		
		case 'exam_search':
			searchExamResult();
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

function searchExamResult(){
	$exam_num = $_POST["exam_num"];

	$conn = connectDB();
	$sql = "SELECT id,exam_number,result FROM exam_results WHERE exam_number='".$exam_num."'";
	error_log($sql);
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " | Exam Number: " . $row["exam_number"]. " | " . $row["result"]. "<br>";
	    }
	} else {
	    echo "Access Denied";
	}

	$conn->close();
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
