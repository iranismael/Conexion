<?php 
	
	$servername = "192.185.131.128";
	$database = "balaboxd_cursophp";
	$username = "balaboxd_userphp";
	$password = "jOCd9h]RRYdA";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Conexion correcta";
	mysqli_close($conn);

	
 ?>