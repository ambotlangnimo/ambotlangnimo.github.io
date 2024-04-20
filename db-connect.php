<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deboy";

// Create a new connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors when connecting
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>