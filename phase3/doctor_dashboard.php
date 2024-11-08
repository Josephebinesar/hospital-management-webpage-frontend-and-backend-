<?php
session_start();
if ($_SESSION['role'] !== 'doctor') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Dashboard</title>
</head>
<body>
    <h2>Doctor Dashboard</h2>
    
    <!-- Display scans and reports -->
    <?php
    $scans = glob("uploads/*");
    foreach ($scans as $file) {
        echo "<a href='$file' target='_blank'>$file</a><br>";
    }
    ?>
    
    <!-- Add review -->
    <form action="add_review.php" method="POST">
        <label for="review">Your Opinion and medicines:</label>
        <textarea name="review" id="review" required></textarea>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>
