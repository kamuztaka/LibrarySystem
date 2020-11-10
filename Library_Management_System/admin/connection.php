<?php
    $con = mysqli_connect("localhost", "root", "solevilla08", "library_users");

    if (!$con) {
        die("Error" . mysqli_connect_error());
    }
?>