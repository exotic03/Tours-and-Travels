<?php
include("database.php");
$pname=$_POST["pname"];
$price=$_POST["price"];
$day=$_POST["day"];
$night=$_POST["night"];
$img=$_FILES['pimg']['name'];
$buffer=$_FILES['pimg']['tmp_name'];
$img=time().$img;
move_uploaded_file($buffer,"package images/".$img);
$classfic=$_POST["clf"];
$category=$_POST["category"];
$location=$_POST["location"];
$desc=$_POST["desc"];
$add="INSERT INTO package_info SET package_name='$pname',package_price='$price',day='$day',night='$night',package_image='$img',classification='$classfic',category='$category',location='$location',package_desc='$desc'";
$connect->query($add);
header("location:packagelist.php");
?>