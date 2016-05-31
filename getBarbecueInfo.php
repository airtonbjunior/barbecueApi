<?php
	$method  = $_SERVER['REQUEST_METHOD'];
	$request = $_SERVER['PATH_INFO'];
	$query   = $_SERVER['QUERY_STRING'];
	$input   = json_decode(file_get_contents('php://input'),true);

	
	
	foreach($_SERVER as $i => $server) {
    	echo $i , ' -> ', $server, "\n";
	}
	

	/* what method */
	switch ($method) {
		case 'GET':
			break;
		case 'PUT':
			break;
		case 'POST':
			break;
		case 'DELETE':
			break;
	}


?>