<?php
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$editid=$_POST['editid'];
$pname=$_POST["pname"];
$price=$_POST["price"];
$day=$_POST["day"];
$category=$_POST["category"];
$location=$_POST["location"];
$desc=$_POST["desc"];
if($_FILES['pimg']['name'] && $_FILES['pimg']['name']!=""){
    $img=$_FILES['pimg']['name'];
    $buffer=$_FILES['pimg']['tmp_name'];
    $img=time().$img;
    move_uploaded_file($buffer,"package images/".$img);
    $update="UPDATE package_info SET package_name='$pname',package_price='$price',day='$day',package_image='$img',category='$category',location='$location',package_desc='$desc' WHERE id=$editid";
}
else{
    $update="UPDATE package_info SET package_name='$pname',package_price='$price',day='$day',category='$category',location='$location',package_desc='$desc' WHERE id='$editid'";
}
$connect->query($update);
header("location:packagelist.php");
?>