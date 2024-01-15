<?php
include 'config.php';

// Get task ID from POST data
$taskId = $_POST['taskId'];

// Update task status in the database (replace with your actual query)
$query = "UPDATE tasks SET status = 0 WHERE id = $taskId";

if ($conn->query($query) === TRUE) {} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>