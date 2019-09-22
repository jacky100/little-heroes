<?php
$host = "localhost";
$user = "root";
$db_password = "";
$name = "little_heroes";

// Create connection
$conn = mysqli_connect($host, $user, $db_password, $name);
$conn->set_charset('utf8');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



