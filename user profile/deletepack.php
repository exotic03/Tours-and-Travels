<?php
$connect=mysqli_connect("localhost","root","","tour_and_travels");
$id=$_GET['pack_id'];
$del="DELETE FROM bookings_info WHERE id='$id'";
$connect->query($del);
header("location:userpackage.php");
?>