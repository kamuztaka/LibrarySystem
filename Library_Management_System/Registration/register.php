<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="register.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <img src="bookshelf.jpg" class="bg">
        <h1>Register Here</h1>
        <div class="container">
            <img src="avatar.png" class="avatar">

            <form method="POST" action="function.php">

                <input type="text" class="txt fname" id="fullname" placeholder="Enter your Full Name.." name="fullname">
                <input type="email" class="txt email" id="email" placeholder="Enter your Email.." name="email">
                <input type="password" class="txt password" id="password" placeholder="Enter your Password.." name="password">
                
                
                <button type="submit" class="btn cancel"><a href='login.php'>Cancel</a></button>
                
                <button name="submit" class="btn reg">Register</button>
            </form>
        </div>
    </body>
</html>