<?php

// Replace these with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>