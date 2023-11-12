<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $user_id = $_SESSION["user_id"];
    $user = $_SESSION["first_name"]; 
    $lawyer_id = $_SESSION["lawyer_id"];
    $lawyer = $_SESSION["lawyer"];

    // Include database connection code here
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'lawyermanagement';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  
    $sql = "INSERT INTO messages (user, user_id,lawyer,lawyer_id, message) VALUES ('$user','$user_id','$lawyer','$lawyer_id', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>;window.location.href='chat_app.php';</script>";
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}