<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=utf-8");
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hero";

//$name = $_POST["HeroName"];
//$name = 'BigHero';
//$id = 8;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



// Get the posted data.
$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
  // Extract the data.
  $request = json_decode($postdata);
  echo "hellllo niggas";

  // Validate.
  if(trim($request->number) === '' || (float)$request->amount < 0)
  {
    return http_response_code(400);
  }

  // Sanitize.
  $name = mysqli_real_escape_string($con, trim($request->name));
  //$amount = mysqli_real_escape_string($con, (int)$request->amount);


  // Create.
  $sql = "INSERT INTO heroes (id,name) VALUES (null,'{$name}')";

  if(mysqli_query($con,$sql))
  {
    http_response_code(201);
    $policy = [
      'id'    => mysqli_insert_id($con),
      'name' => $name
      
    ];
    echo "hellllo niggas";
    echo json_encode($policy);
  }
  else
  {
    http_response_code(422);
    echo "no niggas";
  }
}