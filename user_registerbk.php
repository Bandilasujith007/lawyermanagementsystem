<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user_id = uniqid('User');
	$first_Name = $_POST['first_Name'];
	$last_Name = $_POST['last_Name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact_Number = $_POST['contact_number'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $image_name = $_FILES['image']['name'];
	$full_address = $_POST['full_address'];
	$city = $_POST['city'];
	$zip_code = $_POST['zip_code'];

    


    
    $sql = "INSERT INTO user (user_id, first_Name, last_Name, email, password, contact_Number, image, image_name, full_address, city, zip_code) VALUES (?, ?, ?,?, ?, ?, ?,?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssss', $user_id, $first_Name, $last_Name, $email, $password, $contact_Number, $image, $image_name, $full_address, $city, $zip_code);

    if ($stmt->execute()) {
        // Move the uploaded file to the specified directory
        $uploadedFilePath = $uploadDirectory . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);

        echo "<script type='text/javascript'>alert('Registered Successfully');window.location.href='Ulogin.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

















