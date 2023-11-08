<?php
session_start();
if($_SESSION['userid']=="" || !isset($_SESSION['userid'])) {
    header("location:../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css files/profilestylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile Section</title>
</head>

<body>
    <nav>
        <div class="main-nav">
            <img src="../image assets/logo.png" alt="">
            <div class="navlinks" id="navlinks">
                <ul>
                    <li><a href="../home.php" class="links">Home</a></li>
                    <li><a href="../about.html" class="links">About us</a></li>
                    <li><a href="../allpackages.php" class="links">Packages</a></li>
                    <li><a href="../contactus.html" class="links">Contact Us</a></li>
                    <li><a href="profile.php" class="profile"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
            <div href="#" class="toggle-btn" id="toggle-btn"><i class="fa-solid fa-bars"></i></div>
        </div>
    </nav>

    <?php
        include("../admin/database.php");
        $user_id=$_SESSION['userid'];
        $user_name=$_SESSION['fullname'];
        $user_email=$_SESSION['useremail'];
        $user_phone=$_SESSION['userphone'];
    ?>

    <div class="main">
        <div class="profile-section">
            <div class="left">
                <img src="../image assets/profile avtar.png" alt="">
                <h2><?php echo $user_name ?></h2>
                <h4><?php echo $user_email ?></h4>
                <a data-bs-toggle="modal" data-bs-target="#personalinfoedit" >Edit Profile</a>
            </div>
            <div class="right">
                <a class="options" data-bs-toggle="modal" data-bs-target="#personalinfo">Personal information</a>
                <a href="userpackage.php?id=<?php echo $user_id ?>" class="options">Package Details</a>
                <a href="../userlogout.php" class="options">Logout</a>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="personalinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body info-mod">
                    <h4>User Name</h4>
                    <p><?php echo $user_name ?></p>
                    <h4>User Phone Number</h4>
                    <p><?php echo $user_phone ?></p>
                    <h4>User Email Address</h4>
                    <p><?php echo $user_email ?></p>
                    <a class="btn btn-danger text-center" data-bs-toggle="modal" data-bs-target="#personalinfoedit" data-bs-dismiss="modal">Edit Details</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="personalinfoedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="edituser.php" method="POST">
                        <h4 class="text-dark">User Name</h4>
                        <input type="text" name="name" value="<?php echo $user_name ?>" class="form-control">
                        <h4 class="text-dark">User Phone Number</h4>
                        <input type="text" name="phn" value="<?php echo $user_phone ?>" class="form-control">
                        <h4 class="text-dark">User Email Address</h4>
                        <input type="email" name="email" value="<?php echo $user_email ?>" class="form-control">
                        <h4 class="text-dark">New Password</h4>
                        <input type="password" name="pass" placeholder="Create new password" class="form-control">
                        <h4 class="text-dark">Confirm Password</h4>
                        <input type="password" name="cpass" placeholder="Confirm password" class="form-control">
                        <input type="submit" value="Submit Details" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
    <script src="../js files/homescript.js"></script>

</body>

</html>