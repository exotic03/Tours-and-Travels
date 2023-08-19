<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css files/loginformstyle.css">
</head>
<body>
    <div class="main">
        <div class="img"></div>
        <div class="loginform">
            <h1>Admin Panel Login</h1>
            <form action="login_db.php" method="POST">
                <h4>Username/Email</h4>
                <input type="text" name="uemail" placeholder="Enter your Email or Username" class="input" >
                <h4>Password</h4>
                <input type="password" name="pass" placeholder="Enter your password" class="input">
                <p><input type="submit" value="LOGIN" class="btn"></p>
            </form>
        </div>
    </div>
</body>
</html>