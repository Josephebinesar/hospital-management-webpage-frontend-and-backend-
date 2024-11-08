<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <form action="upload_scan.php" method="POST" enctype="multipart/form-data">
        <label for="scan">Upload Scan:</label>
        <input type="file" name="scan" id="scan" required>
        
        <label for="report">Upload Report:</label>
        <input type="file" name="report" id="report" required>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
