<?php 
    require '../../config/dbConfig.php';

    $student_id = $_POST['student_id'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO brand (student_id, status) VALUES ('".$student_id."')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>