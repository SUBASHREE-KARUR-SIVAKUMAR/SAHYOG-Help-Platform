<?php
header('Content-Type: application/json');
require_once 'connect.php';

$response = ['success' => false, 'message' => 'An unknown error occurred.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$conn) {
        $response['message'] = "Database connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $girl_name = mysqli_real_escape_string($conn, $_POST['girlName']);
    $girl_age = (int)$_POST['girlAge'];
    $help_category = mysqli_real_escape_string($conn, $_POST['helpCategory']);
    $query_description = mysqli_real_escape_string($conn, $_POST['query']);

    $sql = "INSERT INTO girl_child_requests (name, email, phone, location, girl_name, girl_age, help_category, query_description)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssiss", 
            $name, $email, $phone, $location, $girl_name, $girl_age, $help_category, $query_description
        );

        if (mysqli_stmt_execute($stmt)) {
            $response['success'] = true;
            $response['message'] = "Thank you for your submission. We will contact you shortly to discuss how we can help.";
        } else {
            $response['message'] = "Database error: " . mysqli_error($conn);
            error_log("Girl Child Request Error: " . mysqli_error($conn)); 
        }
        mysqli_stmt_close($stmt);
    } else {
        $response['message'] = "Error preparing statement: " . mysqli_error($conn);
        error_log("Girl Child Request Statement Prep Error: " . mysqli_error($conn));
    }
} else {
    $response['message'] = "Access Denied: This page should be accessed via a form submission.";
}

mysqli_close($conn);
echo json_encode($response);
?>

