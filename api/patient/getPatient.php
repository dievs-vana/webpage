<?php 
    require '../../config/dbConfig.php';

    $patient_id = $_GET['patientId'];

    $sql = "SELECT * FROM patient WHERE pId=" . $patient_id;
    $result = $conn->query($sql);

    echo json_encode($result->fetch_assoc());
    
    mysqli_close($conn);
?>