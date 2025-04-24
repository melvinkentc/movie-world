<?php
$conn = new mysqli("localhost", "root", "", "db_movieworld");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

$sql = "INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullname, $username, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful!";
    // You can redirect to login or homepage
    // header("Location: ../index.html");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
