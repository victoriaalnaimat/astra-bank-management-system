<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "bankingdata";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	echo "Database connection field";
}


?>