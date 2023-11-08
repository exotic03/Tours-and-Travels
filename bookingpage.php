<!-- <?php
session_start();
if($_SESSION['userid']=="" || !isset($_SESSION['userid'])) {
    header("location:index.html");
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image assets/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css files/bookingpagestyle.css">
    <title>Booking Page</title>
</head>

<body>

    <nav>
        <div class="main-nav">
            <div class="logo">
                <img src="image assets/logo.png" alt="">
            </div>
            <div class="navlinks" id="navlinks">
                <ul>
                    <li><a href="home.php" class="links">Home</a></li>
                    <li><a href="about.html" class="links">About us</a></li>
                    <li><a href="allpackages.php" class="links">Packages</a></li>
                    <li><a href="contactus.html" class="links">Contact Us</a></li>
                    <li><a href="profile.php" class="profile"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
            <div href="#" class="toggle-btn" id="toggle-btn"><i class="fa-solid fa-bars"></i></div>
        </div>
    </nav>

    <div class="desc-header-section">
        <?php
        include("admin/database.php");
        $packid=$_GET['id'];
        $select="SELECT * FROM package_info where id='$packid'";
        $result=$connect->query($select);
        $data=$result->fetch_assoc();
         ?>
        <img src="admin/package images/<?php echo $data['package_image']; ?>" alt="">
        <div class="short-details">
            <h2 class="pack-name"><?php echo $data['package_name']; ?></h2>
            <h2 class="pack-type">Package Category - <?php echo $data['category']; ?></h2>
            <h2 class="price">Per person - ₹ <?php echo $data['package_price']; ?> /-</h2>
            <h2 class="duration"><?php echo $data['day']; ?> Days , <?php echo $data['night']; ?> Nights</h2>
            <h2 class="places"><?php echo $data['location']; ?></h2>
        </div>
    </div>

    <div class="service">
        <div class="include">
            <h3>Inclusion : </h3>
            <i class="fa-solid fa-plane-departure"></i>
            <i class="fa-solid fa-bed"></i>
            <i class="fa-solid fa-car-side"></i>
            <i class="fa-solid fa-utensils"></i>
            <i class="fa-solid fa-binoculars"></i>
        </div>
    </div>

    <div class="description container">
        <h1>Detailed Package Summary : </h1>
        <p class="desc"><?php echo $data['package_desc']; ?></p>
    </div>

    <div class="details-add-section container">
        <div class="addoption">
            <h1>Add Traveller Details :</h1>
            <button onclick="addTraveller()">Add Traveller</button>
        </div>
        <form id="detailsform" method="POST">
            <h2>Select Number of Traveller :</h2>
            <select name="quantity" id="quantity">
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <h2>Select Date :</h2>
            <input type="date" name="date" id="date">
            <h2>Contact No :</h2>
            <input type="text" name="tnumber" id="tnum" placeholder="Enter contact number">
            <input type="button" value="Add Traveller Details" id="btn" onclick="sendDetails()">
        </form>
        <a href="reviewbookingpage.php?id=<?php echo $data['id'];?>" id="proceedBtn">Proceed Booking</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js files/bookscript.js"></script>
</body>

</html>