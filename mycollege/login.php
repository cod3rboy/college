<?php
    session_start();
    session_destroy();
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My College</title>
   <link rel="stylesheet" href="orginal/style%20(2).css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1><span>MY</span> COLLEGE</h1>
            <p>The Complete Student Solution</p>
        </div>
        <div class="form-container">
            <form method="post" action="php/login.php">
                <input type="text" name="txtUsername" placeholder="Username">
                <input type="password" name="txtPassword" placeholder="Password">
                <button type="submit" name="btnLogin">Login</button>
            </form>
        </div>
        <div class="register">
            <a href="register.html">Sign Up</a>
        </div>
        
        <div class="hands">
            <img src="img/sign%20up.jpg" alt="">
        </div>
    </div>
</body>
</html>