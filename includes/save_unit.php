<?php
// save_unit.php

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve unit data from POST request
    $unitName = $_POST['unitName'];
    $unitLabel = $_POST['unitLabel'];
    $unitRelation = $_POST['unitRelation'];

    // Connect to your MySQL database (change these settings according to your setup)
    $host = 'localhost';
    $username = 'username';
    $password = 'password';
    $database = 'unit_converter';

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert unit data into database
    $sql = "INSERT INTO units (unit_name, unit_label, unit_relation) VALUES ('$unitName', '$unitLabel', '$unitRelation')";

    if ($conn->query($sql) === TRUE) {
        echo 'Unit saved successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // Handle invalid request method
    echo 'Invalid request method';
}
?>
