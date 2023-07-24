<?php
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$pname=$_POST["pname"];
$price=$_POST["price"];
$day=$_POST["day"];
$img=$_FILES['pimg']['name'];
$buffer=$_FILES['pimg']['tmp_name'];
$img=time().$img;
move_uploaded_file($buffer,"package images/".$img);
$category=$_POST["category"];
$location=$_POST["location"];
$add="INSERT INTO package_info SET package_name='$pname',package_price='$price',day='$day',package_image='$img',category='$category',location='$location'";
$connect->query($add);
header("location:packagelist.php");
?>