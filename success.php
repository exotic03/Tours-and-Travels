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
    <link rel="stylesheet" href="css files/reviewbook.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Payment Success Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 500px;
            height: 300px;
        }

        .card-body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
        }

        i{
            font-size: 3rem;
            color: #70e000;
        }

        .card-title {
            font-size: 1.5rem;
            text-align: center;
            color: #184e77;
        }
    </style>
</head>

<body>


    <div class="card">
        <div class="card-body">
            <i class="fa-solid fa-circle-check"></i>
            <h5 class="card-title">Payment Confirmation</h5>
            <p class="card-text">Your transaction is successfully completed</p>
            <p class="card-text">Your Transaction / Payment ID is : <?php echo $_SESSION['paymentid'] ?></p>
            <a href="home.php" class="btn btn-primary">Go to home page</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>