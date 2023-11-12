<?php
session_start();
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ap_name = $_POST['ap_name'];
    $res_name = $_POST['res_name'];
    $content = $_POST['content'];
    $posted_by = $_POST['posted_by'];
    $document = file_get_contents($_FILES['image']['tmp_name']);
    $document_name = $_FILES['image']['name'];
    $ap_date = $_POST['ap_date'];
    $ap_time = $_POST['ap_time'];
    $case_details = $_POST['case_details'];
    $user_id = $_SESSION["user_id"];

    $sql = "INSERT INTO appointment (ap_name,res_name,content,posted_by,document,document_name,ap_date,ap_time,user_id,case_name) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssss', $ap_name, $res_name, $content, $posted_by, $document, $document_name, $ap_date, $ap_time, $user_id, $case_details);

    if ($stmt->execute()) {
        $appointment_id = $conn->insert_id; // Get the last inserted ID

        $_SESSION['ap_id'] = $appointment_id; // Store the appointment_id in the session
        $uploadedFilePath = $uploadDirectory . $document_name; // Use the correct variable here
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);
        echo "<script type='text/javascript'>alert('Registered Successfully ');window.location.href='paymentindex.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
