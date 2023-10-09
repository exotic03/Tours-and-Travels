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
    <link rel="stylesheet" href="css files/reviewbook.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Review Package </title>
</head>

<body>

    <nav>
        <div class="main-nav">
            <div class="logo">
                <img src="image assets/logo.png" alt="">
                <a href="home.php" id="homelink">Tour And Travels</a>
            </div>
            <li><a href="profile.php" class="profile"><i class="fa-solid fa-user"></i></a></li>
        </div>
    </nav>

    <div id="main">
        <div class="section">
            <h3>Review Booking Details</h3>
            <?php
            $connect=mysqli_connect("localhost","root","","tour_and_travels");
            $packid=$_GET['id'];
            $select="SELECT * FROM package_info where id='$packid'";
            $result=$connect->query($select);
            $data=$result->fetch_assoc();
            $tquantity=$_SESSION['temp_data']['quantity'];
            $tdate=$_SESSION['temp_data']['date'];
            $pack_price=$data['package_price'];
            $total_price=$pack_price*$tquantity;
         ?>
            <div class="package-info">
                <h4 class="details"><i class="fa-solid fa-umbrella-beach"></i> <?php echo $data['package_name']; ?></h4>
                <h4 class="details"><i class="fa-solid fa-person"></i> <?php echo $tquantity?> Travellers</h4>
                <h4 class="details"><i class="fa-regular fa-calendar-days"></i> <?php echo $tdate?></h4>
            </div>
            <div class="payment-info">
                <h4>Fare Details :</h4>
                <div class="line"></div>
                <div class="pprice">
                    <h5>Package Price</h5>
                    <p>₹ <?php echo $data['package_price']; ?>/- per person</p>
                </div>
                <div class="pprice">
                    <h5>Total Package Price</h5>
                    <p>₹ <?php echo $total_price?> /-</p>
                </div>
            </div>
            <a href="order_details.php?id=<?php echo $data['id'];?>" id="bookpck">Book Package</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>