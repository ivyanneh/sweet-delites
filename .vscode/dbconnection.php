<?php
$servername = "localhost"; // Server name, usually 'localhost' for local development
$username = "root"; // Database username, typically 'root' for local development
$password = ""; // Database password, often left empty for local development
$dbname = "Sweet delites"; // Database name to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Uncomment the line below if you want to output a success message when connected successfully
// echo "Connected successfully";

?>