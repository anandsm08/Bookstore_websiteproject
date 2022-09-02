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
        
            <div class="form">
            <h3>Sign Up</h3>
            <p>Enter your Details</p>
                <form action="" method="POST">
                <input type="text" name="usermail" placeholder="Enter Name" required class="box">
                    <br>
                <input type="text" name="usermail" placeholder="Enter Email" required class="box">
                    <br>
                <input type="password" name="userpass" placeholder="Enter Password" required class="box">
                    <br>
                    
                <input type="password" name="userpass" placeholder="Confirm Password" required class="box">
                    <br>
                <select name="usertype">
                    <option value="user">User</option>
                    <option value="Admin">Admin</option>
                </select>
                <br>
                <input type="button" value="Register">
                <p>Already a user?<a href="userlogin.php">Login</a></p>
                </form>
            </div>
        </div>
    
    
</body>
</html>