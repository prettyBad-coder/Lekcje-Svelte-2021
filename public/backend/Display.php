<?php

	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

	require_once 'DB.php';
	$sql = 'SELECT * FROM samochody';
	$query = mysqli_query($conn, $sql);
	$response = array();

	while ($row = mysqli_fetch_assoc($query)) {
		$response[] = $row;
	}

	$res = json_encode($response);
	echo $res;
?>