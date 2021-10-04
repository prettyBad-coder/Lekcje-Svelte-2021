<?php

	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	$json = file_get_contents('php://input');
	$data = json_decode($json);

	$marka = $data->marka;
	$model = $data->model;
	$rocznik = $data->rocznik;
	$kolor = $data->kolor;
	$stan = $data->stan;

	$sql = "INSERT INTO samochody(marka, model, rocznik, kolor, stan) VALUES ('$marka', '$model', '$rocznik', '$kolor', '$stan')";
	


	require_once 'DB.php';
	$query = mysqli_query($conn, $sql);
	$response = array();

	while ($row = mysqli_fetch_assoc($query)) {
		$response[] = $row;
	}

	$res = json_encode($response);
	echo $res;
?>