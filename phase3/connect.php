<?php
$servername = "localhost";
$username = "root";  // Default username for MySQL
$password = "";      // Default password for MySQL on XAMPP is empty
$dbname = "hospital_portal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
