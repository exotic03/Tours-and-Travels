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
    <link rel="stylesheet" href="../css files/userpackstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Your Packages</title>
</head>

<body>

    <div class="main">
        <h1>Your Travel Packages</h1>
        <div class="packages-container">
            <?php
                include("../admin/database.php");
                $id=$_GET['id'];
                $sel="SELECT * FROM bookings_info WHERE user_id='$id'";
                $res=$connect->query($sel);
                while($result=$res->fetch_assoc()){
            ?>
            <div class="packages">
                <h2 class="pname"><?php echo $result['package_name']; ?></h2>
                <h3 class="pprice">Price - ₹ <?php echo $result['package_price']; ?></h3>
                <h3 class="quantity">No. of Tourist - <?php echo $result['tourist_number']; ?></h3>
                <h3 class="date">Journey Date - <?php echo $result['date']; ?></h3>
                <h3 class="contact">Contact no. - <?php echo $result['contact_no']; ?></h3>
                <h3 class="tnames">Traveller Names - <?php echo $result['traveller_name']; ?></h3>
                <h3 class="tages">Traveller Ages - <?php echo $result['traveller_age']; ?></h3>
                <a href="deletepack.php?pack_id=<?php echo $result['id']; ?>" class="btn btn-danger">Cancel Package</a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>