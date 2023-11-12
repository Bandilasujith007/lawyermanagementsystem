<?php
session_start();

// update.php

// Database connection (same as before)
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $id = $_SESSION["user_id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update user details in the database
    $sql = "UPDATE user SET first_name='$name', email='$email', password='$password' WHERE user_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo 'User details updated successfully.';
        echo "<script type='text/javascript'>alert('Profile Updated Successfully');window.location.href='userprofile.php';</script>";
 
    } else {
        echo 'Error updating user details: ' . $conn->error;
    }
}

$conn->close();
?>