<?php
	$method  = $_SERVER['REQUEST_METHOD'];
	$request = $_SERVER['PATH_INFO'];
	$query   = $_SERVER['QUERY_STRING'];
	$input   = json_decode(file_get_contents('php://input'),true);


	/* Test Database */
	$host     = "";
	$database = "";
	$user     = "";
	$pass     = "";
	/* Test Database */

	$dbh = mysqli_connect ($host, $user, $pass) or die ('I cannot connect to the database because: ' . mysql_error());
	mysqli_select_db($dbh, $database) or die ('No database');
	
	//mysqli_set_charset($link,'utf8');
	$result = mysqli_query($dbh, 'SELECT * FROM users');

	echo mysqli_num_rows($result) . "\n-------------------------\n";

	for ($i=0; $i<mysqli_num_rows($result); $i++) {
		echo ($i>0 ? ',' : '').json_encode(mysqli_fetch_object($result)) . "\n";
	}


/* Se quiser logar depois */
/*
	foreach($_SERVER as $i => $server) {
    	echo $i , ' -> ', $server, "\n";
	}
	
	echo "\n-------------------------\n";

	foreach($_SERVER['argv'] as $i => $arg) {
    	echo $i , ' -> ', $arg, "\n";
	}
*/


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