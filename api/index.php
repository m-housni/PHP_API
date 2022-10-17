<?php
	$route 	= $_SERVER['REQUEST_URI']; // Get the route, e.g. /api/1.0/users,
	$method = $_SERVER['REQUEST_METHOD']; // Get the method, e.g. GET, POST, PUT, DELETE

	$route = substr($route, 1); // Remove the first slash, e.g. api/1.0/users => api/1.0/users
	$route = explode("?", $route); // Remove the query string, e.g. api/1.0/users?name=John => api/1.0/users
	$route = explode("/", $route[0]); // Explode the route, e.g. api/1.0/users => [api, 1.0, users]
	$route = array_diff($route, array('API_Restful', 'api')); // Remove the API_Restful and api from the array, e.g. [api, 1.0, users] => [1.0, users]
	$route = array_values($route); // Reindex the array, e.g. [1.0, users] => [0 => 1.0, 1 => users]

	$arr_json = null; // Initialize the array that will hold the JSON data

	if (count($route) <= 2) {
		// If the route is /client or client/id
		switch ($route[0]) {
			case 'client':
				include('client.class.php'); // Include the client class
				$client = new Client($_REQUEST['name'],$_REQUEST['age'],$_REQUEST['gender']); // Create a new client object
				$arr_json = $client->verifyMethod($method,$route); // Verify the method and get the JSON data
				break;
			
			default:
				$arr_json = array('status' => 404); // If the route is not found, return 404
				break;
		}

	}else{
		$arr_json = array('status' => 404); // If the route is not found, return 404
	}

	echo json_encode($arr_json);

?>