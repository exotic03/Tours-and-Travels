<?php
session_start();
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$id=$_GET["id"];
echo $id;
$user=$_SESSION['userid'];
$sel="SELECT * FROM user_table WHERE id='$user'";
$res=$connect->query($sel);
$data=$res->fetch_assoc();
$userid=$data['id'];
echo $userid;
$selpack="SELECT * FROM package_info WHERE id='$id'";
$result=$connect->query($selpack);
$packdata=$result->fetch_assoc();
$package_name=$packdata['package_name'];
$package_price=$packdata['package_price'];
$insert="INSERT INTO bookings_info SET package_name='$package_name',package_price='$package_price',user_id='$userid'";
$connect->query($insert);
header("location:seasional packages/summerpack.php");
?>