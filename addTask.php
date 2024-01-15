<?php
include 'config.php';

// Get task name and desc from POST data
$taskName = $_POST['task_name'];
$taskDesc = $_POST['task_desc'];

// Insert task data in the database
$query = "INSERT INTO tasks (task_name,task_desc,status) VALUES('$taskName','$taskDesc',1)";

if ($conn->query($query) === TRUE) {} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>