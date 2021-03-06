<?php

// Turn off all error reporting
error_reporting ( 0 );

require 'config.php';

// Create connection
$connection = mysqli_connect ( DB_HOST, DB_USER, DB_PASS, DB_NAME );

$response = array ();

// Check connection
if (mysqli_connect_errno ( $connection )) {
	$response [Status] = "Error";
	$response [Message] = "Failed to connect to MySQL: " . mysqli_connect_error ();
} else {
	
	// read the post data
	$inputJSON = file_get_contents ( 'php://input' );
	
	// load json data
	$input = json_decode ( $inputJSON, TRUE );
	
	// Adding users to the db
	$query = "INSERT INTO schools (name, city, state, country) VALUES ('" . $input [name] . "','" . $input [city] . "','" . $input [state] . "', '" . $input [country] . "')";
	
	mysqli_query ( $connection, $query );
	// end of adding users
	
	$response [Status] = "OK";
	
	mysqli_close ( $connection );
}

echo json_encode ( $response );

?>