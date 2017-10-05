<?php
	//servidor MySQL

	// local
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "masterdatabase";
    $port = 8889;
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database, $port);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>

