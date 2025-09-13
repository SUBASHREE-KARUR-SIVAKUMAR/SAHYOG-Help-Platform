<?php
// Include the database connection file
require_once 'connect.php'; // Make sure this path is correct

// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $donation_type = mysqli_real_escape_string($conn, $_POST['donation_type']);
    
    // latitude, longitude, amount_willing, and availability are no longer in the form or DB

    // 2. Prepare an SQL INSERT statement
    // The column list here MUST exactly match your donator table
    $sql = "INSERT INTO donator (name, phone, email, address, category, donation_type)
            VALUES (?, ?, ?, ?, ?, ?)";

    // Use prepared statements for better security
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters (s=string)
        // The number and type of 's' MUST exactly match the number of '?' in the SQL
        mysqli_stmt_bind_param($stmt, "ssssss", 
            $name, $phone, $email, $address, $category, $donation_type
        );

        // 3. Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to a success page or show a success message
            header("Location: register_donator.php?status=donator_success"); // Redirect back to register_donator.php
            exit();
        } else {
            // Error occurred
            // For debugging, you can temporarily uncomment the line below to see the SQL error
            // echo "Error: " . mysqli_error($conn); 
            header("Location: register_donator.php?status=donator_error"); // Redirect back with error
            exit();
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Error preparing statement
        // For debugging, you can temporarily uncomment the line below to see the preparation error
        // echo "Error preparing statement: " . mysqli_error($conn);
        header("Location: register_donator.php?status=donator_error"); // Redirect back with error
        exit();
    }
} else {
    // If accessed directly without POST data
    echo "<div class='message error'>Access Denied: This page should be accessed via a form submission.</div>";
}

// Close the database connection
mysqli_close($conn);
?>
