<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "db_movieworld");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$username = trim($_POST['username']);
$password = $_POST['password'];

// Check if user exists
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header("Location: ../index.php");
        exit;
    } else {
        // Incorrect password
        $_SESSION['login_error'] = "Incorrect password.";
        $_SESSION['login_error_shown'] = true;
        header("Location: ../index.php");
        exit;
    }
} else {
    // Username not found
    $_SESSION['login_error'] = "Username not found.";
    $_SESSION['login_error_shown'] = true;
    header("Location: ../index.php");
    exit;
}

$stmt->close();
$conn->close();
?>