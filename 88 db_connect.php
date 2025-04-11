<?php
$servername = "localhost:3307";
$username = "root"; // change if needed
$password = "";     // change if needed
$dbname = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
