<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyermanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_SESSION["user_id"];
$data = [
    'payment_id' => $_POST['razorpay_payment_id'],
    'amount' => $_POST['totalAmount'],
    'product_id' => $_POST['product_id'],
];

// Insert data into the "orders" table
$sql_insert = "INSERT INTO orders (user_id, payment_id, amount, product_id) VALUES (?, ?, ?, ?)";
$stmt_insert = $conn->prepare($sql_insert);
$stmt_insert->bind_param("sssi", $id, $data['payment_id'], $data['amount'], $data['product_id']);

if ($stmt_insert->execute()) {
    // Data inserted successfully, now update the status in the "appointment" table

    // Assuming you have a way to relate the "orders" and "appointment" tables, replace 'appointment_id' with the correct column name.
    $appointment_id = $_SESSION['ap_id']; // You need to determine how to get the appointment_id from your form data or session.
    $user_id = $_SESSION["user_id"];
    $sql_update = "UPDATE appointment SET status = 1, user_id= ? WHERE id = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ss", $user_id,$appointment_id);

    if ($stmt_update->execute()) {
        $arr = array('msg' => 'Payment successfully credited and appointment status updated', 'status' => true);
        echo json_encode($arr);
    } else {
        $arr = array('msg' => 'Error updating appointment status', 'status' => false);
        echo json_encode($arr);
    }

    $stmt_update->close();
} else {
    $arr = array('msg' => 'Error: Unable to insert data into the database', 'status' => false);
    echo json_encode($arr);
}

// Close the statements and database connection
$stmt_insert->close();
$conn->close();
?>
