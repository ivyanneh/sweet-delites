<?php
$servername = "localhost"; // Server name, usually 'localhost' for local development
$username = "root"; // Database username, typically 'root' for local development
$password = ""; // Database password, often left empty for local development
$dbname = "sweet_delites"; // Database name to connect to
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>