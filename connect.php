<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hackathon_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set charset to handle special characters properly
mysqli_set_charset($conn, "utf8");

// Success message (you can remove this later)
// echo "Connected successfully to hackathon_db database!";
?>
