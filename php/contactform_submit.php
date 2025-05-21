<?php
// Enable error reporting and logging for debugging
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-error.log'); // Log file in the same folder
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_movieworld';
$adminEmail = 'melvinkentc@gmail.com'; // Update your admin email here

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    error_log("DB Error: " . $conn->connect_error);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit();
}

// Sanitize inputs
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$phone || !$message) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
    exit();
}
if (!preg_match('/^09\d{9}$/', $phone)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid phone format']);
    exit();
}

// IP address
$ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';

// Prepare SQL statement, exclude submitted_at (auto handled by DB)
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, message, ip_address) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) {
    error_log("Prepare failed: " . $conn->error);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Database error']);
    exit();
}
$stmt->bind_param("sssss", $name, $email, $phone, $message, $ip);

if ($stmt->execute()) {
    // Send admin notification email
    $adminSubject = "New Contact Form Submission";
    $adminBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message\n\nIP: $ip\n";
    $adminHeaders = "From: no-reply@movieworld.com";

    @mail($adminEmail, $adminSubject, $adminBody, $adminHeaders);

    // Send confirmation email to user
    $userSubject = "Thanks for contacting MovieWorld";
    $userBody = "Hi $name,\n\nWe've received your message. We'll get back to you soon.\n\n- MovieWorld";
    @mail($email, $userSubject, $userBody, $adminHeaders);

    echo json_encode(['status' => 'success']);
} else {
    error_log("Insert Error: " . $stmt->error);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Database insert failed']);
}

$stmt->close();
$conn->close();
