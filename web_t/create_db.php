<?php
// Database connection details
$host = 'localhost';  // Change to your database host
$username = 'root';   // Change to your database username
$password = '';       // Change to your database password
$dbname = 'conference_registration';  // The name of the database to create

// Create a connection without specifying a database
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database if it doesn't exist
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database '$dbname' created or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Now that the database is created (or already exists), select it
$conn->select_db($dbname);

// SQL to create the 'participants' table
$sql_create_table = "CREATE TABLE IF NOT EXISTS participants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    field VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    research_interests TEXT NOT NULL,
    workshop VARCHAR(50),
    comments TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query to create the table
if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'participants' created or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>
