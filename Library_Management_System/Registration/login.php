<?php
    include('connection.php');
    session_start();

    if(isset($_SESSION['email'])) {
        header("location:home.php");
    }

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body>
        <div class="mainpage">
            <h1>WELCOME TO LIBRARY</h1>
            <img src="bookshelf.jpg" class="book">
            <div class="container">
                <img src="avatar.png" class="avatar">

                <form method="POST" action="">
                    <input type="text" class="logpass email" placeholder="Email.." name="email">
                    <i class="fas fa-user"></i>
                    <input type="password" class="logpass password" placeholder="Password.." name="password">
                    <i class="fas fa-key"></i>
                    <p class="forgot">Forgot Password</p>
                    <button name="Submit" type="submit" class="btn login">Login</button>
                    <a href="register.php">
                        <button class="btn register">Register</button>
                    </a>
                </form>

            </div>
        </div>
    </body>
</html>