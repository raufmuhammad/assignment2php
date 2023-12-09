
<?php
$servername = "172.31.22.43";
$username = "Muhammad200553407";
$password = "8ff4eD_Aic";
$database = "Muhammad200553407";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

