<?php
session_start();
if ($_SESSION['role'] !== 'doctor') {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['review'])) {
    $review = htmlspecialchars($_POST['review']);
    file_put_contents("reviews.txt", $review . "\n", FILE_APPEND);
    echo "Review added!";
}
?>
