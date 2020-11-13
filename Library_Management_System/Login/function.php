<?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = md5($password);
        $query = "INSERT INTO registration(fullname, email, password)
        VALUES ('$fullname', '$email', '$password')"; 

        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            header("Location: login.php?success");
        }else{
            echo "Something went wrong";
        }
    }
?>