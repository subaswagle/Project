<?php
// Database connection details
$servername = "localhost";  // Usually "localhost" for local server
$username = "root";         // Your MySQL username (default is "root" for local server)
$password = "";             // Your MySQL password (leave empty if you haven't set one)
$dbname = "hamro_store";    // Name of the database you are connecting to

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";
}
?>
