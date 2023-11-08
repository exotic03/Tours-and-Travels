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
            <li><a href="user profile/profile.php" class="profile"><i class="fa-solid fa-user"></i></a></li>
        </div>
    </nav>

    <div id="main">
        <div class="section">
            <h3>Review Booking Details</h3>
            <?php
            include("admin/database.php");
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
                    <h5>Package Price : </h5>
                    <p>₹ <?php echo $data['package_price']; ?>/- per person</p>
                </div>
                <div class="pprice">
                    <h5>Total Package Price : </h5>
                    <p>₹ <?php echo $total_price?> /-</p>
                </div>
            </div>
            <a href="javascript:void(0)" data-packageid="<?php echo $data['id']; ?>" data-packagename="<?php echo $data['package_name']; ?>" data-amount="<?php echo $total_price ?>" id="bookpck">Book Package</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>

        $("#bookpck").click(function(){
            var amount=$(this).attr('data-amount');
            var packageName=$(this).attr('data-packagename');
            var packageId=$(this).attr('data-packageid');

        var options = {
            "key": "rzp_test_Gl1fZKrWBy2OPS", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Trippy",
            "description": packageName,
            "image": "https://example.com/your_logo",
            "handler": function (response){
            var paymentId=response.razorpay_payment_id;

                $.ajax({
                url:"order_details.php",
                type:"POST",
                data:{
                    package_id:packageId,
                    payment_id:paymentId
                },
                success:function(finalResponse){
                    if(finalResponse=='done'){
                        window.location="http://localhost/Tours_and_Travels/success.php";
                    }
                }   
                });
            },
            "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    // e.preventDefault();
    });
</script>
</body>

</html>