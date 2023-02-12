<?php

include "config.php";

if (isset($_POST['updateId'])) {
    $empId = $_POST['updateId'];

    $sql = "Select * from `emp_table` where id=$empId";
    $result = mysqli_query($conn, $sql);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or data not found";
}

//Update Query
if (isset($_POST['hiddenId'])) {
    $uniqueId = $_POST['hiddenId'];
    $name = $_POST['updateName'];
    $address = $_POST['updateAddress'];
    $phone = $_POST['updatePhone'];
    $email = $_POST['updateEmail'];

    $sql = "Update `emp_table` set name='$name', address='$address', phone='$phone', email='$email' where id=$uniqueId";

    $result = mysqli_query($conn, $sql);
}
?>