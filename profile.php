<?php
session_start();
if($_SESSION['userid']=="" || !isset($_SESSION['userid'])) {
    header("location:index.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css files/profilestyle.css">
    <title>Profile Information</title>
</head>

<body>
    <div class="back">
        <div class="upper-section">
            <div class="profile-avatar">
                <img src="image assets/profile avtar.png" alt="">
            </div>
            <h1><?php 
                $name=$_SESSION['fullname'];
                echo $name;
            ?></h1>
        </div>
        <div class="middle-section">
            <a class="options">
                <h1>Personal Information</h1>
            </a>
            <a class="options">
                <h1>My Packages</h1>
            </a>
            <a href="userlogout.php" class="options">
                <h1>Logout</h1>
            </a>
        </div>
    </div>
</body>

</html>