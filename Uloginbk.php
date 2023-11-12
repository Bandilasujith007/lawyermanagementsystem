<?php
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
	$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    //change DB name 
    $dbname = "lawyermanagement"; 
	
	
// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	  
	 $sql = "SELECT * from user where email = '$email' AND password = '$password'";  
	 


// Execute the query
$result = $conn->query($sql);

// Check if a user with the given credentials exists
if ($result->num_rows == 1) {

    // User is authenticated, set session variable to indicate login
    $_SESSION["logged_in"] = true;
    $userInfo = $result->fetch_assoc();
    $_SESSION["user_id"] = $userInfo["user_id"];
    $_SESSION["first_name"] = $userInfo["first_name"];
  
    // Redirect to a protected page (e.g., home.php)
    header("Location: admin_home.php");
    exit();
} else {
    // Invalid credentials, show an error message
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
}
?>