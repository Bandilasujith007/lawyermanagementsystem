<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
    $user_id = $_SESSION["user"];
    $user = $_SESSION["name"]; 
    


    // Include database connection code here
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'lawyermanagement';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  
    $sql = "INSERT INTO community_chat (user_name, user_id, message,date,time) VALUES ('$user','$user_id','$message',CURDATE(),CURRENT_TIME())";

    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>;window.location.href='chatapp.php';</script>";
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}