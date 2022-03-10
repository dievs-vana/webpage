<?php 
    require '../../config/dbConfig.php';

    $brand_name = $_POST['brand_name'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO brand (brand_name, status) VALUES ('".$brand_name."', '".$status."')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>