<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="summerpackstyle.css">
  <title>Summer Packages</title>
</head>

<body>
  <nav>
    <div class="main-nav">
      <div class="logo">
        <img src="image assets/download.png" alt="">
        <a href="#" id="homelink">Tour And Travels</a>
      </div>
      <div class="navlinks" id="navlinks">
        <ul>
          <li><a href="#" class="links">Home</a></li>
          <li><a href="#" class="links">About us</a></li>
          <li><a href="#" class="links">Packages</a></li>
          <li><a href="#" class="links">Offers</a></li>
          <li><a href="#" class="sbtn" data-bs-toggle="modal" data-bs-target="#loginsection">Log in</a></li>
          <li><a href="#" class="pbtn" data-bs-toggle="modal" data-bs-target="#signupsection">Sign up</a></li>
        </ul>
      </div>
      <div href="#" class="toggle-btn" id="toggle-btn"><i class="fa-solid fa-bars"></i></div>
    </div>
  </nav>
  <div class="header-img">
    <h1>Summer Packages</h1>
    <form action="##" class="search-bar">
      <input type="text" name="q" id="search">
      <span id="animatesearch">
        <p>Search your favourite Packages</p>
      </span>
      <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  </div>

  <h1 id="head">Summer Destinations</h1>
  <div class="all-products container">
    <?php
            $connect=mysqli_connect("localhost","root","","tour_and_travels");
            $row="SELECT * FROM package_info where classification='Summer Destination'";
            $res=$connect->query($row);
            while($line=$res->fetch_assoc()){
            ?>
    <div class="products">
      <img src="admin/package images/<?php echo $line['package_image']; ?>">
      <div class="product-info">
        <h4 class="product-title"><?php echo $line['package_name']?></h4>
        <p class="product-places"><?php echo $line['location'] ?></p>
        <p class="product-price"><?php echo $line['package_price'] ?></p>
        <a class="product-btn" href="#">Explore</a>
      </div>
    </div>
    <?php
            }
    ?>
    
  </div>
  <footer>
    <h1>Tour and Travels</h1>
    <div class="footer-links">
      <h3>Products</h3>
      <a href="#">Overview</a>
      <a href="#">Customers</a>
      <a href="#">Pricing</a>
      <a href="#">Bookings</a>
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
      <a href="#">IRCTC</a>
      <a href="#">INDIGO</a>
      <a href="#">UBER</a>
      <a href="#">RED BUS</a>
    </div>
  </footer>

  <div class="modal" tabindex="-1" id="loginsection">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-body">
          <div class="main">
            <div class="img"></div>
            <div class="loginform">
              <h1>Login</h1>
              <form action="index.html">
                <h4>Email</h4>
                <input type="text" name="email" placeholder="Enter your Email" class="input">
                <h4>Username</h4>
                <input type="text" name="user" placeholder="Enter your Username" class="input">
                <h4>Password</h4>
                <input type="password" name="pass" placeholder="Enter your password" class="input">
                <p><input type="submit" value="LOGIN" class="log"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1" id="signupsection">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-body">
          <div class="rmain">
            <div class="img"></div>
            <div class="signupform">
              <h1>Register</h1>
              <form action="index.html">
                <h4>Full Name</h4>
                <input type="text" name="email" placeholder="Enter your name" class="input" autocomplete="off">
                <h4>Email Address</h4>
                <input type="text" name="email" placeholder="Enter your Email address" class="input" autocomplete="off">
                <h4>Create Username</h4>
                <input type="text" name="user" placeholder="Create your Username" class="input" autocomplete="off">
                <h4>Create Password</h4>
                <input type="password" name="pass" placeholder="Create your password" class="input" autocomplete="off">
                <h4>Confirm Password</h4>
                <input type="password" name="cpass" placeholder="Re-enter your password" class="input"
                  autocomplete="off">
                <p><input type="submit" value="SIGN UP" class="log"></p>
              </form>
            </div>
          </div>
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
  <script src="script.js"></script>
</body>

</html>