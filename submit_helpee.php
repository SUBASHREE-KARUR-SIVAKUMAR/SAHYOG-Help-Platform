<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $amount_needed = isset($_POST['amount_needed']) && $_POST['amount_needed'] !== '' ? (float)$_POST['amount_needed'] : NULL;
    $querry = mysqli_real_escape_string($conn, $_POST['querry']); 

    $sql = "INSERT INTO helpee (name, phone, email, address, category, amount_needed, querry)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssssds", 
            $name, $phone, $email, $address, $category, $amount_needed, $querry
        );

        if (mysqli_stmt_execute($stmt)) {
            header("Location: register_helpee.php?status=helpee_success");
            exit();
        } else {
            error_log("Helpee submission error: " . mysqli_error($conn));
            header("Location: register_helpee.php?status=helpee_error");
            exit();
        }
        mysqli_stmt_close($stmt);
    } else {
        error_log("Helpee statement prep error: " . mysqli_error($conn));
        header("Location: register_helpee.php?status=helpee_error");
        exit();
    }
} else {
    header("Location: register_helpee.php?status=error_access");
    exit();
}

mysqli_close($conn);
?>
