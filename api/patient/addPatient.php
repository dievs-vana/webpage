<?php 
    require '../../config/dbConfig.php';

    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $school_year = $_POST['school_year'];
    $full_name = $_POST['full_name'];
    $birth_date = $_POST['birth_date'];
    $addRess = $_POST['addRess'];
    $mobileno = $_POST['mobileno'];
    $year_old = $_POST['year_old'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $emergency_guardian = $_POST['emergency_guardian'];
    $relation_ship = $_POST['relation_ship'];
    $emergency_contact = $_POST['emergency_contact'];


    $sql = "INSERT INTO patient (student_id, course, school_year, full_name, birth_date, addRess, mobile_no, year_old, gender, marital_status, nationality, religion, emergency_guardian, relation_ship, emergency_contact) VALUES ('".$student_id."', '".$course."', '".$school_year."', '".$full_name."', '".$birth_date."', '".$addRess."', '".$mobileno."', '".$year_old."', '".$gender."', '".$marital_status."', '".$nationality."', '".$religion."', '".$emergency_guardian."', '".$relation_ship."', '".$emergency_contact."')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>