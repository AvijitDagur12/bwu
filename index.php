<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h2>THE HACKATHON 2024</h2>
<nav>
    <a href="#">HOME</a>
    <a href="#">ABOUT</a>
    <a href="#">SERVICE</a>
    <a href="#">CONTACT</a>
</nav>
<div class="sign-in-up">
    <button type="button" onclick="popup('login-popup')">LOGIN</button>
    <button type="button" onclick="popup('register-popup')">REGISTER</button>
</div>
    </header>

    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E mail or user name" name="email_username">
                <input type="password" placeholder="password" name="password">
<button type="submit" class="login-btn" name="login">Login</button>
            </form>
        </div>
    </div>


    <div class="popup-container" 
     id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Registration</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full name" name="fullname">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="password" name="password">
<button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>


    <script>
 function popup(popup_name){
         get_popup=document.getElementById(popup_name);
         if(get_popup.style.display=="flex"){
            get_popup.style.display="none"
         }
         else{
            get_popup.style.display="flex"
         }
 }

    </script>
</body>
</html>