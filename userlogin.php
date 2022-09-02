<?php
$host="localhost";
$user="root";
$password="";
$db="";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheBookYard</title>
    <link rel="stylesheet" href="assets/user_styles.css">
</head>
<body>
    <div class="container">
        <!-- <div class="info">
            
        </div> -->
        
            <div class="form">
            <h3>Login</h3>
            <p>Enter your Details</p>
                <form action="" method="POST">
                    <input type="text" name="usermail" placeholder="email" required class="box">
                    <br>
                    <input type="password" name="userpass" placeholder="password" required class="box">
                    <br>
                    <input type="button" value="Login">
                    <p class="message">New User? <a href="usersignup.php">Register Now!</a></p>
                </form>
            </div>
        </div>
    
    
</body>
</html>






