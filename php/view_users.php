<?php
// Start session
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "db_movieworld");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch user data
$sql = "SELECT user_id, fullname, username, email, password FROM users";
$result = $conn->query($sql);

// Check if data was fetched
if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>
            <tr>
                <th>User ID</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['user_id'] . "</td>
                <td>" . $row['fullname'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['password'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>