<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$data = json_decode(file_get_contents('php://input'), true);

// Prepare and execute SQL query to insert data into 'orders' table
$sql = "INSERT INTO orders (Orders) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $data['orders']); // Use $data['orders'] instead of $data['items']
$stmt->execute();
$stmt->close();

// Close database connection
$conn->close();

// Send response back to client
echo json_encode(['success' => true]);

?>
