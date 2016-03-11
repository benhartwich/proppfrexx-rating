<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn,"utf8");
?>