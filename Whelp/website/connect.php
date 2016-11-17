<?php
$servername = "tsuts.tskoli.is";
$username = "0704973019";
$password = "mypassword";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>