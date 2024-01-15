<?php
include 'config.php';

// Delete closed tasks (replace with your actual query)
$query = "DELETE FROM tasks WHERE status = 0";

if ($conn->query($query) === TRUE) {} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>