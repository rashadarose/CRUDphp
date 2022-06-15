<?php
header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=utf-8");
	if($_POST['name']){
	$res = "hi " . $_POST['name'];
	echo json_encode($res);

	}
?>