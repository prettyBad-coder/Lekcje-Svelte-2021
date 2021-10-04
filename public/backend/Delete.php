<?php

	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	$json = file_get_contents('php://input');
	$data = json_decode($json);

	$index = $data->id;

	$sql = "DELETE FROM `samochody` WHERE `samochody`.`id` = $index";

	require_once 'DB.php';
	$query = mysqli_query($conn, $sql);

	echo $query;
?>