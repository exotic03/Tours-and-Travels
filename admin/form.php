<?php
session_start();
if($_SESSION['adminid']=="" || !isset($_SESSION['adminid'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Package Form</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("include/sidebar.php");?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("include/topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <!-- /.container-fluid -->

                <form action="insertpackage.php" method="post" enctype="multipart/form-data">
                    <h2>Fill package Details</h2>
                    <label for="Package Name">Package Name</label>
                    <p><input type="text" name="pname" placeholder="Enter package name" required class="form-control"></p>
                    <label for="Package Price">Package Price</label>
                    <p><input type="text" name="price" placeholder="Enter package price" required class="form-control"></p>
                    <label for="Day">Day of package</label>
                    <p><input type="number" name="day" placeholder="Enter day of package" required class="form-control"></p>
                    <label for="Day">Night of package</label>
                    <p><input type="number" name="night" placeholder="Enter night of package" required class="form-control"></p>
                    <label for="">Image for Package</label>
                    <p><input type="file" name="pimg" class="form-control"></p>
                    <label for="Day">Package Classification</label>
                    <p><input type="text" name="clf" placeholder="Enter classification of package" required class="form-control"></p>
                    <label for="category">Package Category</label>
                    <br>
                    <select name="category" class="form-control">
                        <option value="">Select Category</option>
                        <option value="standard">Standard</option>
                        <option value="premium">Premium</option>
                    </select>
                    <br>
                    <label for="location">Package Location</label>
                    <p><input type="text" name="location" placeholder="Enter location" required class="form-control"></p>
                    <label for="desc">Package Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    <input type="submit" value="Submit Package">
                </form>

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include("include/footer.php") ?>
           
            <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('desc');
            </script>
            <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>