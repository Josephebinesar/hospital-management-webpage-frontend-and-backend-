<?php
session_start();
if ($_SESSION['role'] !== 'patient') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Dashboard</title>
</head>
<body>
    <h2>Patient Dashboard</h2>
    
    <!-- Display scans and reports -->
    <?php
    $scans = glob("uploads/*");
    foreach ($scans as $file) {
        echo "<a href='$file' target='_blank'>$file</a><br>";
    }
    ?>
    
    <!-- Display reviews -->
    <h3>Doctor's Reviews and medicines:</h3>
    <?php
    if (file_exists("reviews.txt")) {
        echo nl2br(file_get_contents("reviews.txt"));
    } else {
        echo "No reviews yet.";
    }
    ?>
</body>
</html>
