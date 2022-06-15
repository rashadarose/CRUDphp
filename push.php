<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=utf-8");
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hero";

$name = $_POST["name"];
//$id = $_POST["id"];
$desc = $_POST["description"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


	function createUser($conn, $name, $desc){
		$sql = "INSERT INTO heroes (name, Description) VALUES (?,?)";
		/* prepared statement*/
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			//header("location:../signup.php?error=stmtfailed");
			exit();
		}

		//$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		//stmt prepare bind then execute, close

		mysqli_stmt_bind_param($stmt, "ss", $name, $desc);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		//header("location:../signup.php?error=none");
		echo json_encode("succesfully entered ");
		exit();

	}
	createUser($conn, $name, $desc);
?>