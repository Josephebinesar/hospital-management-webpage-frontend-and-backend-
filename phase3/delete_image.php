<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.html");
    exit();
}

if (isset($_GET['filename'])) {
    $file_path = 'uploads/' . basename($_GET['filename']);

    // Check if the file exists before attempting to delete it
    if (file_exists($file_path)) {
        if (unlink($file_path)) {  // unlink() deletes the file
            echo "File deleted successfully!";
        } else {
            echo "Error: Unable to delete the file.";
        }
    } else {
        echo "Error: File does not exist.";
    }
} else {
    echo "Error: No file specified.";
}
?>
