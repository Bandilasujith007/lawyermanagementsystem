<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Assuming you have the file path in your database, replace with the actual path
    $filePath = "uploads/" . $id; 

    // Check if the file exists
    if (file_exists($filePath)) {
        $fileInfo = pathinfo($filePath);
        $fileExtension = strtolower($fileInfo['extension']);

        // Set the appropriate headers for download
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . basename($filePath) . "\"");

        // Check the file extension and set the appropriate content type
        if ($fileExtension === 'pdf') {
            header("Content-Type: application/pdf");
        } elseif (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
            header("Content-Type: image/jpeg"); // Adjust the content type for other image formats
        }

        readfile($filePath);
    } else {
        echo 'File not found.';
    }
} else {
    echo 'File ID not provided.';
}
?>
