<?php
include 'config.php';

$name = $_POST['nameAdd'];
$address = $_POST['addressAdd'];
$phone = $_POST['phoneAdd'];
$email = $_POST['emailAdd'];

if (isset($_POST['nameAdd']) && isset($_POST['addressAdd']) && isset($_POST['phoneAdd']) && isset($_POST['emailAdd'])) {
    $sql = "insert into `emp_table` (name, address, phone, email) values ('$name', '$address', '$phone', '$email')";
    $result = mysqli_query($conn, $sql);
}
?>