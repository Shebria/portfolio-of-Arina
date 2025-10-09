<?php
$host = 'localhost';  // Your host
$user = 'root';  // Your MySQL username
$pass = '';  // Your MySQL password
$db = 'portfolio_db';  // Your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
