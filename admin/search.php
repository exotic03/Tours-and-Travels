<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dashstyle.css">

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
            
                

                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Package Name</th>
                                <th scope="col">Package Price</th>
                                <th scope="col">Day</th>
                                <th scope="col">Package Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $connect=mysqli_connect("localhost","root","","tour_and_travels");
                            if(isset($_GET['search'])){
                                $search_value=$_GET['search'];
                                $query="SELECT * FROM package_info WHERE CONCAT(package_name,package_price,day,category,location) LIKE '%$search_value%'";
                                $result=mysqli_query($connect,$query);

                                if(mysqli_num_rows($result)>0){
                                    foreach($result as $line){
                                        ?>
                                        <tr>
                                        <td><?php echo $line['package_name'] ?></td>
                                        <td><?php echo $line['package_price'] ?></td>
                                        <td><?php echo $line['day'] ?></td>
                                        <td><img src="package images/<?php echo $line['package_image']; ?>" style="width: 120px;" alt=""></td>
                                        <td><?php echo $line['category'] ?></td>
                                        <td><?php echo $line['location'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                        <tr>
                                            <td colspan="6">No record fund</td>
                                        </tr>
                                    <?php
                                }
                            }
                            
                            ?>
                            
                        </tbody>

                    </table>

                    <a href="packagelist.php" class="btn btn-primary m-4">Back to main list</a>

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include("include/footer.php") ?>
            <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>
