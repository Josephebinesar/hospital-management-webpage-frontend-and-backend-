<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.html");
    exit();
}

// Ensure the 'uploads' directory exists
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);  // Creates the directory with permissions if it doesn't exist
}

if (isset($_FILES['scan']) && isset($_FILES['report'])) {
    $scan_path = $upload_dir . basename($_FILES['scan']['name']);
    $report_path = $upload_dir . basename($_FILES['report']['name']);

    if (move_uploaded_file($_FILES['scan']['tmp_name'], $scan_path) && move_uploaded_file($_FILES['report']['tmp_name'], $report_path)) {
        echo "Files uploaded successfully!";
    } else {
        echo "Failed to upload files.";
        if (!is_writable($upload_dir)) {
            echo " The 'uploads' directory is not writable.";
        }
    }
} else {
    echo "No files selected for upload.";
}
?>
