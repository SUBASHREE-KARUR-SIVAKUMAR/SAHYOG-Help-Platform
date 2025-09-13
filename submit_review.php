<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $helpee_id = NULL; 
    $donator_id = NULL; 
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $rating = (int)$_POST['rating'];
    
    $photo_path = '';
    $video_path = '';
    $receipt_path = '';
    $proof_type = 'Document';

    // Handle photo upload
    if (isset($_FILES['photo_file']) && $_FILES['photo_file']['error'] == 0) {
        $upload_dir = 'uploads/';
        if (!file_exists($upload_dir)) { mkdir($upload_dir, 0777, true); }
        $photo_path = $upload_dir . uniqid() . '_' . basename($_FILES['photo_file']['name']);
        if (!move_uploaded_file($_FILES['photo_file']['tmp_name'], $photo_path)) {
            $photo_path = ''; // Clear path if upload fails
            error_log("Failed to upload photo: " . $_FILES['photo_file']['name']);
        }
    }

    // Handle video upload
    if (isset($_FILES['video_file']) && $_FILES['video_file']['error'] == 0) {
        $upload_dir = 'uploads/';
        if (!file_exists($upload_dir)) { mkdir($upload_dir, 0777, true); }
        $video_path = $upload_dir . uniqid() . '_' . basename($_FILES['video_file']['name']);
        if (!move_uploaded_file($_FILES['video_file']['tmp_name'], $video_path)) {
            $video_path = ''; // Clear path if upload fails
            error_log("Failed to upload video: " . $_FILES['video_file']['name']);
        }
    }

    // Handle receipt/document upload
    if (isset($_FILES['receipt_file']) && $_FILES['receipt_file']['error'] == 0) {
        $upload_dir = 'uploads/';
        if (!file_exists($upload_dir)) { mkdir($upload_dir, 0777, true); }
        $receipt_path = $upload_dir . uniqid() . '_' . basename($_FILES['receipt_file']['name']);
        if (!move_uploaded_file($_FILES['receipt_file']['tmp_name'], $receipt_path)) {
            $receipt_path = ''; // Clear path if upload fails
            error_log("Failed to upload receipt: " . $_FILES['receipt_file']['name']);
        }
    }

    // Determine proof_type based on what was uploaded
    $uploaded_files = array_filter([$photo_path, $video_path, $receipt_path]);
    if (count($uploaded_files) > 1) {
        $proof_type = 'Multiple';
    } elseif (!empty($photo_path)) {
        $proof_type = 'Photo';
    } elseif (!empty($video_path)) {
        $proof_type = 'Video';
    } elseif (!empty($receipt_path)) {
        $proof_type = 'Receipt';
    } else {
        $proof_type = 'Document'; // Default if nothing uploaded
    }
    
    // Basic validation
    if (empty($title) || empty($description) || $rating < 1 || $rating > 5) {
        header("Location: reviews.php?status=error");
        exit();
    }
    
    $sql = "INSERT INTO reviews (helpee_id, donator_id, title, description, rating, photo_path, video_path, receipt_path, proof_type) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "iisssisss", 
            $helpee_id, $donator_id, $title, $description, $rating, 
            $photo_path, $video_path, $receipt_path, $proof_type
        );
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: reviews.php?status=success");
        } else {
            error_log("Review submission error: " . mysqli_error($conn));
            header("Location: reviews.php?status=error");
        }
        mysqli_stmt_close($stmt);
    } else {
        error_log("Review statement prep error: " . mysqli_error($conn));
        header("Location: reviews.php?status=error");
    }
} else {
    header("Location: reviews.php");
}

mysqli_close($conn);
?>
