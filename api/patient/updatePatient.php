<?php 
    require '../../config/dbConfig.php';

    $patient_id = $_POST['patient_id'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    $school_year = $_POST['school_year'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $addRess = $_POST['addRess'];
    $mobile_no = $_POST['mobile_no'];
    $year_old = $_POST['year_old'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $nationality = $_POST['nationality'];
    $relihiyon = $_POST['relihiyon'];
    $emergency_guardian = $_POST['emergency_guardian'];
    $relation_ship = $_POST['relation_ship'];
    $emergency_contact = $_POST['emergency_contact'];

    // arrayasd = [];
    // array.pusj("first_name='".$first_name."'");
    // array.pusj("last_name='".$last_name."'");
    // array.join(",");

    // first_name='".$first_name."', last_name='".$last_name."'

    $sql = "UPDATE patient SET student_id='".$student_id."', course='".$course."', school_year='".$school_year."', first_name='".$first_name."', middle_name='".$middle_name."', last_name='".$last_name."', birth_date='".$birth_date."', addRess='".$addRess."', mobile_no='".$mobile_no."',  year_old='".$year_old."', gender='".$gender."', marital_status='".$marital_status."', nationality='".$nationality."', relihiyon='".$relihiyon."', emergency_guardian='".$emergency_guardian."', relation_ship='".$relation_ship."', emergency_contact='".$emergency_contact."' WHERE pId=".$patient_id;
    // "INSERT INTO patient (student_id, course, school_year, first_name, middle_name, last_name, birth_date, addRess, mobile_no, year_old, gender, marital_status, nationality, relihiyon, emergency_guardian, relation_ship, emergency_contact) VALUES ('".$student_id."', '".$course."', '".$school_year."', '".$first_name."', '".$middle_name."', '".$last_name."', '".$birth_date."', '".$addRess."', '".$mobileno."', '".$year_old."', '".$gender."', '".$marital_status."', '".$nationality."', '".$relihiyon."', '".$emergency_guardian."', '".$relation_ship."', '".$emergency_contact."')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>