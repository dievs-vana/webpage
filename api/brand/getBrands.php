<?php 
    require '../../config/dbConfig.php';

    $sql = "SELECT * FROM brand";
    $result = $conn->query($sql);
    $results = array();

    while($row = $result->fetch_assoc()) {
        array_push($results, $row);
    }

    echo json_encode($results);
    
    mysqli_close($conn);
?>