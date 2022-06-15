<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=utf-8");
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hero";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		
		$ll = $_GET['id'];
		$ql = "DELETE FROM heroes WHERE id=$ll";

				/*if (isset($_GET['id'])) {
				  echo json_encode("Variable 'a' is set.<br>");
				  echo json_encode($ll);
				}*/
				//echo json_encode($ll);

		if(mysqli_query($conn, $ql)){
		    echo json_encode("Records were deleted successfully.");
		} else{
		    echo json_encode("ERROR: Could not able to execute $ql. " . mysqli_error($conn));
		}
		 
		// Close connection
		mysqli_close($conn);

	//}
	
?>