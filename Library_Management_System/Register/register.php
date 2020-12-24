<?php
    include 'reg.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="register.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <img src="../Register/images/bookshelf.jpg" class="bg">
        <h1>Register Here</h1>
        <div class="container">
            <img src="../Register/images/avatar.png" class="avatar">

            <form method="POST" name="myForm" onsubmit="return validateform()">

                <input type="text" class="txt studentid" name="studentid" placeholder="Enter your Student ID">
                <input type="text" class="txt fname" name="fullname" placeholder="Enter your Full Name">
                <input type="email" class="txt email" name="email" placeholder="Enter your Email">
                <input type="password" class="txt password" name="password" placeholder="Enter your Password">
                <input type="password" class="txt conPass" name="conPass" placeholder="Confirm Password">
                <input type="submit" class="btn reg" value="Register" name="reg_user">
    
            </form>
            <a href="../Login/login.html">
                <button type="submit" class="btn cancel">Cancel</button>
            </a>

        </div>

        <!-- <script src="register.js"></script> -->
    </body>
</html>