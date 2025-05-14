<?php
$servername = "localhost";
$username = "root";
$password = ""; // default password for XAMPP is empty
$dbname = "db_movieworld"; // your actual DB name

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>