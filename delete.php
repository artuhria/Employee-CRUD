<?php
include "config.php";

if (isset($_POST['deleteEmp'])) {
    $unique = $_POST['deleteEmp'];

    $sql = "Delete from `emp_table` where id=$unique";
    $result = mysqli_query($conn, $sql);
}

?>