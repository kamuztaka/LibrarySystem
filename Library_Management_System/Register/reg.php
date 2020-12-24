<?php
    include "connect.php";

    if (isset($_POST['reg_user'])) {
        $studentid = $_POST['studentid']; 
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (studentid, fullname, email, password)
        VALUES ('$studentid', '$fullname', '$email', '$password')";
        
        $query_run = mysqli_query($con, $query);
        $password = md5($password);
        
        if($query_run) {
            header("location: /LibrarySystem/Library_Management_System/Login/login.php");
        }else{
            echo("Something went wrong");
        }
    }
?>