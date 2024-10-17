<?php
$servername = "localhost";
$username = "FESTUS";
$password = "Kipro22$"; // Leave empty if no password
$dbname = "aic eldoret -college management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
