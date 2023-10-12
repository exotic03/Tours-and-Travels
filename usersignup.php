<?php
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$uname=$_POST['name'];
$uemail=$_POST['email'];
$userphone=$_POST['phone'];
$upass=$_POST['pass'];
$user_insert="INSERT INTO user_table SET name='$uname',email='$uemail',phnumber='$userphone',user_pass='$upass'";
$connect->query($user_insert);
header("location:home.php");
?>