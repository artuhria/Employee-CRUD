<?php
$conn = mysqli_connect("localhost", "root", "", "employees");

if ($conn) {
} else {
    die(mysqli_error($conn));
}
?>