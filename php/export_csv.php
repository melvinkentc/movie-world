<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = ''; // your DB password
$dbname = 'movieworld';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Set headers to force download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=contact_messages.csv');

// Open output stream
$output = fopen('php://output', 'w');

// Output column headings
fputcsv($output, ['Date', 'Name', 'Email', 'Phone', 'Message']);

// Fetch data and write to CSV
$result = $conn->query("SELECT submitted_at, name, email, phone, message FROM contact_messages ORDER BY submitted_at DESC");

while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
$conn->close();
exit;
?>