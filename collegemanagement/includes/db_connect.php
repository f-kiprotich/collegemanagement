<?php
$servername = "localhost"; 
$username = "festus"; 
$password = "kipro22$"; 
$dbname = "aic_eldoret_college_management"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // This line creates the connection

// Check connection and display error message if any
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
    //var_dump($conn);
}


?>
