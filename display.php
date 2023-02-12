<?php
include "config.php";

if (isset($_POST['displayData'])) {
    $table = '<table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th id="action">Action</th>
            
          </tr>
        </thead>';

    $sql = "Select * from `emp_table`";
    $result = mysqli_query($conn, $sql);
    $counter = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $address = $row['address'];
        $phone = $row['phone'];
        $email = $row['email'];

        $table .= '<tr>
        <td scope = "row">' . $counter . '</td>
        <td>' . $name . '</td>
        <td>' . $address . '</td>
        <td>' . $phone . '</td>
        <td>' . $email . '</td>
        <td> 
        <button class="btn btn-primary" id="actions" onclick="updateEmployee(' . $id . ')">Update</button>
        <button class="btn btn-danger" id="actions" onclick="deleteEmployee(' . $id . ')">Delete</button>
        </td>
        </tr>';

        $counter++;
    }
    $table .= '</table>';
    echo $table;
}
?>