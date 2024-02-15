<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "12345678";
$database = "mydb";


// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $unitName = $_POST["unitName"];
    $unitLabel = $_POST["unitLabel"];
    $relation = $_POST["relation"];
    $description = $_POST["description"];

    // Insert data into database
    $sql = "INSERT INTO units (unitName, unitLabel, relation, description) VALUES ('$unitName', '$unitLabel', '$relation', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>