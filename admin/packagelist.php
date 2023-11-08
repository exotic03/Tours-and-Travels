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

  <title>Package List</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css files/liststyle.css">

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

                      <form action="search.php" method="GET"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" id="search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search Package Details .."
                                aria-label="Search" aria-describedby="basic-addon2" id="search-input" name="search" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
        <!-- /.container-fluid -->
        <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col">Package Name</th>
              <th scope="col">Package Price</th>
              <th scope="col">Day</th>
              <th scope="col">Night</th>
              <th scope="col">Package Image</th>
              <th scope="col">Classification</th>
              <th scope="col">Category</th>
              <th scope="col">Location</th>
              <th scope="col">Package Description</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("database.php");
            $row="SELECT * FROM package_info";
            $res=$connect->query($row);
            while($line=$res->fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $line['package_name'] ?></td>
              <td><?php echo $line['package_price'] ?></td>
              <td><?php echo $line['day'] ?></td>
              <td><?php echo $line['night'] ?></td>
              <td><img src="package images/<?php echo $line['package_image']; ?>" style="width: 120px;" alt=""></td>
              <td><?php echo $line['classification'] ?></td>
              <td><?php echo $line['category'] ?></td>
              <td><?php echo $line['location'] ?></td>
              <td><a href="packageDescription.php?id=<?php echo $line['id'];?>" class="btn btn-primary">Details</a></td>
              <td><a href="editlist.php?id=<?php echo $line['id'];?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td><a href="delete.php?id=<?php echo $line['id'];?>" class="btn btn-danger" onclick="return confirm('Are you want to delete this data ?');"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php
            } ?>
          </tbody>
        </table>
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <?php include("include/footer.php") ?>
      <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>