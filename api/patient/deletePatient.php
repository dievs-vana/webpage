<?php 
    require '../../config/dbConfig.php';

    $patient_id = $_POST['patient_id'];
   


    $sql = "DELETE FROM patient WHERE pId=".$patient_id;
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>