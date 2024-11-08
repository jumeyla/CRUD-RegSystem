<?php
$host = "localhost";
$username = "jumila";
$password = "localhostadmin";
$database = "prg";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
     echo "Player registered successfully!"
?>
