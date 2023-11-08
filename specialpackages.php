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
    <link rel="shortcut icon" href="image assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css files/specialpackstyle.css">
    <title>Special Packages</title>
</head>
<body>
    <nav>
        <div class="main-nav">
            <img src="image assets/logo.png" alt="">
            <div class="navlinks" id="navlinks">
                <ul>
                    <li><a href="home.php" class="links">Home</a></li>
                    <li><a href="about.html" class="links">About us</a></li>
                    <li><a href="allpackages.php" class="links">Packages</a></li>
                    <li><a href="contactus.html" class="links">Contact Us</a></li>
                    <li><a href="user profile/profile.php" class="profile"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
            <div href="#" class="toggle-btn" id="toggle-btn"><i class="fa-solid fa-bars"></i></div>
        </div>
    </nav>
    <?php
        include("admin/database.php");
        $name=$_GET['name'];
        $sel="SELECT * FROM package_info WHERE package_name LIKE '%$name%'";
        $result=mysqli_query($connect,$sel);
    ?>
    <div class="header-img">
        <h1><?php echo $name ?> Packages</h1>
    </div>

    <div class="all-products">
        <?php
            if(mysqli_num_rows($result)>0){
            foreach($result as $data){
          ?>
        <div class="cards">
            <img src="admin/package images/<?php echo $data['package_image']; ?>" alt="">
            <div class="p-container"></div>
            <h1 class="p-title"><?php echo $data['package_name']?></h1>
            <h2 class="duration"><?php echo $data['day']?> Days <?php echo $data['night']?> Nights</h2>
            <p class="places"><?php echo $data['location'] ?></p>
            <p class="price">₹ <?php echo $data['package_price'] ?> /- per person</p>
            <a class="product-btn" href="bookingpage.php?id=<?php echo $data['id'];?>">View Details</a>
        </div>
        <?php
        }
      }else{
        ?>
        <h3 class="danger">No Package Found</h3>                         
        <?php
      }
      ?>
    </div>

    <footer>
        <h1>Trippy</h1>
        <div class="footer-links">
            <h3>Support</h3>
            <a href="about.html">About Us</a>
            <a href="contactus.html">Contact Us</a>
            <a href="contactus.html">Help Center</a>
            <a href="#">Call Center</a>
        </div>
        <div class="footer-links">
            <h3>Services</h3>
            <a href="#">Hotels</a>
            <a href="#">Trains</a>
            <a href="#">Flights</a>
            <a href="#">Cars</a>
        </div>
        <div class="footer-links">
            <h3>Partners</h3>
            <a href="https://www.irctc.co.in/">IRCTC</a>
            <a href="https://www.goindigo.in/">INDIGO</a>
            <a href="https://www.uber.com/in/en/">UBER</a>
            <a href="https://www.redbus.in/">RED BUS</a>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
      <script src="js files/searchpackscript.js"></script>
</body>
</html>