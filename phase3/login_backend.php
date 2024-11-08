<?php
session_start();
include 'connect.php'; // Connects to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        if ($role == 'admin') {
            header("Location: admin_dashboard.php");
        } elseif ($role == 'doctor') {
            header("Location: doctor_dashboard.php");
        } else {
            header("Location: patient_dashboard.php");
        }
        exit();
    } else {
        echo "Invalid credentials!";
    }

    $stmt->close();
    $conn->close();
}
?>
