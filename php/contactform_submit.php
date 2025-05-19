<?php
// DB config
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_movieworld';

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    // Log database connection error
    error_log('Database connection failed: ' . $conn->connect_error);
    http_response_code(500); // Internal Server Error
    echo 'Database connection failed';
    exit();
}

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Check if all fields are provided
    if (!$name || !$email || !$phone || !$message) {
        http_response_code(400); // Bad Request
        echo 'Missing required fields';
        exit();
    }

    // Prepare and execute the insert query
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "success"; // Return success message
    } else {
        // Log MySQL error
        error_log('MySQL Error: ' . $stmt->error);
        http_response_code(500); // Internal Server Error
        echo "Failed to submit message.";
    }

    $stmt->close();
    $conn->close();
} else {
    // If the request method is not POST, return 405 (Method Not Allowed)
    http_response_code(405); 
    echo 'error'; 
}
?>
