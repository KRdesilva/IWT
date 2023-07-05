<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "payment_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo"connection succesful";
}
?>
