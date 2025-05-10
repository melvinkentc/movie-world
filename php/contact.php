<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database credentials
$host = 'localhost';
$user = 'root';
$password = ''; // your DB password
$dbname = 'movieworld';

// Create DB connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Collect the form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validate data
if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^09\d{9}$/', $phone) && !empty($message)) {
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
} else {
    echo 'error';
}

$conn->close();
?>