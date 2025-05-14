<?php
// register.php

// Database connection
$conn = new mysqli("localhost", "root", "", "db_movieworld");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize
$fullname = trim($_POST['fullname']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $username, $email, $password);

if ($stmt->execute()) {
    echo "<script>
        alert('Registration successful!');
        window.location.href = '/movie-world/index.php';
    </script>";
} else {
    echo "<script>
        alert('Error: " . $stmt->error . "');
        window.history.back();
    </script>";
}

$stmt->close();
$conn->close();
?>