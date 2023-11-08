<?php
include("database.php");
$id=$_GET["id"];

//delete image from server
$sel="SELECT * FROM package_info WHERE id='$id'";
$res=$connect->query($sel);
while($line=$res->fetch_assoc()){
    $pic=$line['package_image'];
    unlink("package images/".$pic);
}

//delete data from table
$del="DELETE FROM package_info WHERE id='$id'";
$connect->query($del);
header("location:packagelist.php");
?>