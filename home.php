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
    <link rel="stylesheet" href="css files/homestyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Trippy - Tour and Travels</title>
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

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
        style="position: relative; width: 100%;">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="carousel-caption d-block" style="position: absolute; top: 40%;">
                    <h1 style="font-family: 'Borel', cursive; text-align: center; font-size: 3.2rem;" class="shead">
                        Make your plan with us and explore the entire world
                    </h1>
                </div>
                <img src="image assets/beach silde.jpg" class="d-block w-100" alt="..."
                    style="height: 650px; object-fit: cover; object-position: center;">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="carousel-caption d-block" style="position: absolute; top: 40%;">
                    <h1 style="font-family: 'Borel', cursive; text-align: center; font-size: 3.2rem;" class="shead">
                        Make your plan with us and explore the entire world
                    </h1>
                </div>
                <img src="image assets/ladakh slide.jpg" class="d-block w-100" alt="..."
                    style="height: 650px; object-fit: cover; object-position: center;">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-block" style="position: absolute; top: 40%;">
                    <h1 style="font-family: 'Borel', cursive; text-align: center; font-size: 3.2rem;" class="shead">
                        Make your plan with us and explore the entire world
                    </h1>
                </div>
                <img src="image assets/manali.jpg" class="d-block w-100" alt="..."
                    style="height: 650px; object-fit: cover; object-position: center;">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-block" style="position: absolute; top: 40%;">
                    <h1 style="font-family: 'Borel', cursive; text-align: center; font-size: 3.2rem;" class="shead">
                        Make your plan with us and explore the entire world
                    </h1>
                </div>
                <img src="image assets/valley slide.jpg" class="d-block w-100" alt="..."
                    style="height: 650px; object-fit: cover; object-position: bottom;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="search-section">
        <form action="searchpack.php" id="search-bar" method="GET">
            <input type="text" placeholder="Search Travel Packages" name="search_data">
            <button type="submit" name='search'><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>

    <div class="featured-section">
        <h3>Featured Tours</h3>
        <h2>Beautiful Places Around India</h2>
        <div class="photo-grid">
            <div id="first">
                <img src="image assets/taj agra.jpg" alt="">
                <h4>Agra</h4>
            </div>
            <div class="two-photos">
                <div class="two-photo">
                    <img src="image assets/goa.jpg" alt="">
                    <h4>Goa</h4>
                </div>
                <div class="two-photo">
                    <img src="image assets/kashmir.jpg" alt="">
                    <h4>Kashmir</h4>
                </div>
            </div>
            <div id="second">
                <img src="image assets/ladakh7.jpg" alt="">
                <h4>Ladakh</h4>
            </div>
        </div>
    </div>

    <div class="short-intro">
        <div class="big-section">
            <h4>Best Locations</h4>
            <h1>Indian Tourism</h1>
        </div>
        <div class="small-section">
            <p>With user-friendly tools, captivating destination descriptions, and secure booking options, our design
                ensures a smooth and exciting travel planning experience. our platform has everything you need to
                discover, plan, and book your Indian adventure with ease. </p>
        </div>
    </div>

    <h1 class="package-heads">Top Seasional Destination Packages</h1>

    <div class="card-container">
        <a class="cards c1" href="seasional packages/summerpack.php">
            <img src="image assets/summer.jpeg">
            <p class="card-text">Summer</p>
        </a>
        <a class="cards c1" href="seasional packages/winterpack.php">
            <img src="image assets/winter.jpg">
            <p class="card-text">Winter</p>
        </a>
        <a class="cards c1" href="seasional packages/monsoonpack.php">
            <img src="image assets/monsoon.jpg">
            <p class="card-text">Monsoon</p>
        </a>
        <a class="cards c1" href="seasional packages/springpack.php">
            <img src="image assets/spring.jpg">
            <p class="card-text">Spring</p>
        </a>
    </div>

    <h1 class="package-heads">Top Destination Packages</h1>

    <div class="card-container">
        <a class="cards c2" href="specialpackages.php?name=kashmir">
            <img src="image assets/khasmir pic3.jpg">
            <p class="card-text">kashmir</p>
        </a>
        <a class="cards c2" href="specialpackages.php?name=shimla">
            <img src="image assets/shimla.jpg">
            <p class="card-text">Shimla</p>
        </a>
        <a class="cards c2" href="specialpackages.php?name=goa">
            <img src="image assets/goa.jpg">
            <p class="card-text">Goa</p>
        </a>
        <a class="cards c2" href="specialpackages.php?name=jaipur">
            <img src="image assets/jaipur.jpg">
            <p class="card-text">Jaipur</p>
        </a>
    </div>

    <h1 class="package-heads">Top Adventure Destination Packages</h1>

    <div class="card-container">
        <a class="cards c3" href="specialpackages.php?name=ladakh">
            <img src="image assets/leh pic.jpg">
            <p class="card-text">Leh ladakh</p>
        </a>
        <a class="cards c3" href="specialpackages.php?name=manali">
            <img src="image assets/manali pic.jpg">
            <p class="card-text">Manali</p>
        </a>
        <a class="cards c3" href="specialpackages.php?name=rishikesh">
            <img src="image assets/rafting.jpg">
            <p class="card-text">Rishikesh</p>
        </a>
        <a class="cards c3" href="specialpackages.php?name=andaman">
            <img src="image assets/scuba diving.jpg">
            <p class="card-text">Andaman</p>
        </a>
    </div>

    <h1 class="package-heads">Top Religious Destination Packages</h1>

    <div class="card-container">
        <a class="cards c4" href="specialpackages.php?name=varanasi">
            <img src="image assets/varanasi.jpg">
            <p class="card-text">Varanasi</p>
        </a>
        <a class="cards c4" href="specialpackages.php?name=kedarnath">
            <img src="image assets/kedarnath.webp">
            <p class="card-text">Kedarnath</p>
        </a>
        <a class="cards c4" href="specialpackages.php?name=haridwar">
            <img src="image assets/haridwar.jpg">
            <p class="card-text">Haridwar</p>
        </a>
        <a class="cards c4" href="specialpackages.php?name=amritsar">
            <img src="image assets/amritsar.jpg">
            <p class="card-text">Amritsar</p>
        </a>
    </div>

    <h1 class="package-heads">Top Wildlife Destination Packages</h1>

    <div class="card-container">
        <a class="cards c5" href="specialpackages.php?name=corbet">
            <img src="image assets/jim corbet.jpg">
            <p class="card-text">Jim corbet</p>
        </a>
        <a class="cards c5" href="specialpackages.php?name=kaziranga">
            <img src="image assets/kaziranga.jpg">
            <p class="card-text">Kaziranga</p>
        </a>
        <a class="cards c5" href="specialpackages.php?name=gir">
            <img src="image assets/gir national park.jpg">
            <p class="card-text">Gir National Park</p>
        </a>
        <a class="cards c5" href="specialpackages.php?name=sundarban">
            <img src="image assets/sundarban.jpg">
            <p class="card-text">Sundarban</p>
        </a>
    </div>

    <h1 class="package-heads">Top South India Destination Packages</h1>

    <div class="card-container">
        <a class="cards c6" href="specialpackages.php?name=puducherry">
            <img src="image assets/pondicherry.jpg">
            <p class="card-text">Puducherry</p>
        </a>
        <a class="cards c6" href="specialpackages.php?name=karnataka">
            <img src="image assets/karnataka.jpg">
            <p class="card-text">Karnataka</p>
        </a>
        <a class="cards c6" href="specialpackages.php?name=kerala">
            <img src="image assets/kerala 2.jpg">
            <p class="card-text">Kerala</p>
        </a>
        <a class="cards c6" href="specialpackages.php?name=tamilnadu">
            <img src="image assets/tamilnadu.jpg">
            <p class="card-text">Tamilnadu</p>
        </a>
    </div>

    <h1 class="package-heads">Top North East India Destination Packages</h1>

    <div class="card-container">
        <a class="cards c7" href="specialpackages.php?name=darjeeling">
            <img src="image assets/darjeeling pic 1.jpg">
            <p class="card-text">Darjeeling</p>
        </a>
        <a class="cards c7" href="specialpackages.php?name=meghalaya">
            <img src="image assets/meghalaya.jpg">
            <p class="card-text">Meghalaya</p>
        </a>
        <a class="cards c7" href="specialpackages.php?name=gangtok">
            <img src="image assets/gangtok.jpg">
            <p class="card-text">Gangtok</p>
        </a>
        <a class="cards c7" href="specialpackages.php?name=shillong">
            <img src="image assets/shillong.jpg">
            <p class="card-text">Shillong</p>
        </a>
    </div>

    <div class="bottom-section container">
        <div class="pic">
            <img src="image assets/man bg.png" alt="">
        </div>
        <div class="pic-right">
            <h1>Could not find your dream package ?</h1>
            <p>Explore all packages here</p>
            <a href="allpackages.php">Explore</a>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
    <script src="js files/homescript.js"></script>
</body>

</html>